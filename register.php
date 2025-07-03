<?php
session_start();
require_once 'db.php';

$fullname = $gender = $dob = $phonenumber = $email = $street = $city = $province = $zip = $country = $username = $password = $confirm = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    $fullname = clean($_POST['full_name']);
    $gender = $_POST['gender'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $phonenumber = clean($_POST['phone']);
    $email = clean($_POST['email']);
    $street = clean($_POST['street']);
    $city = clean($_POST['city']);
    $province = clean($_POST['province']);
    $zip = clean($_POST['zip']);
    $country = clean($_POST['country']);
    $username = clean($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    // Validations
    if (!preg_match("/^[A-Za-z\s]{2,50}$/", $fullname)) $errors['full_name'] = "Name must be 2-50 letters and spaces only.";
    if (empty($gender)) $errors['gender'] = "Gender is required.";

    if (!empty($dob)) {
        $birthdate = new DateTime($dob);
        $today = new DateTime();
        $age = $today->diff($birthdate)->y;
        if ($age < 18) $errors['dob'] = "You must be at least 18 years old.";
    } else {
        $errors['dob'] = "Date of birth is required.";
    }

    if (!preg_match("/^09\d{9}$/", $phonenumber)) $errors['phone'] = "Phone number must be 11 digits and start with 09.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email format.";
    if (!preg_match("/^[A-Za-z0-9\s,.-]{5,100}$/", $street)) $errors['street'] = "Street must be 5–100 characters long.";
    if (!preg_match("/^[A-Za-z\s]{2,50}$/", $city)) $errors['city'] = "City must be 2–50 letters and spaces only.";
    if (!preg_match("/^[A-Za-z\s]{2,50}$/", $province)) $errors['province'] = "Province must be 2–50 letters and spaces only.";
    if (!preg_match("/^\d{4}$/", $zip)) $errors['zip'] = "ZIP code must be 4 digits.";
    if (!preg_match("/^[A-Za-z\s]{2,50}$/", $country)) $errors['country'] = "Country must be letters and spaces only.";
    if (!preg_match("/^\w{5,20}$/", $username)) $errors['username'] = "Username must be 5–20 characters (letters, digits, underscore).";
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/", $password)) $errors['password'] = "Password must include uppercase, lowercase, number, special character and be 8+ characters.";
    if ($password !== $confirm) $errors['confirm_password'] = "Passwords do not match.";

    // If no errors, insert into database
    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("INSERT INTO users 
                (full_name, gender, dob, phone, email, street, city, province, zip, country, username, password)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt->execute([
                $fullname, $gender, $dob, $phonenumber, $email,
                $street, $city, $province, $zip, $country,
                $username, $hashedPassword
            ]);

            $_SESSION['user'] = $username;
            $_SESSION['user_data'] = compact('fullname', 'gender', 'dob', 'phonenumber', 'email', 'street', 'city', 'province', 'zip', 'country', 'username');

            echo "<script>alert('Registration successful! Logging in...'); window.location.href = 'login.php';</script>";
            exit;

        } catch (PDOException $e) {
            if (str_contains($e->getMessage(), 'Integrity constraint violation')) {
                $errors['username'] = "Username or email already exists.";
            } else {
                die("Database error: " . $e->getMessage());
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>WG Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: skyblue;">WJ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-5 pt-5">
    <section class="log-section mb-5">
      <div class="registration-card">
        <h2>Registration Form</h2>

        <?php
        function errorField($errors, $key) {
            return isset($errors[$key]) ? "<div class='invalid-feedback d-block'>{$errors[$key]}</div>" : "";
        }
        ?>

        <form action="" method="POST">
          <h3>Personal Information</h3>

          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name:</label>
            <input type="text" class="form-control <?= isset($errors['full_name']) ? 'is-invalid' : '' ?>" id="fullName" name="full_name" value="<?= htmlspecialchars($fullname) ?>">
            <?= errorField($errors, 'full_name') ?>
          </div>

          <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select class="form-select <?= isset($errors['gender']) ? 'is-invalid' : '' ?>" id="gender" name="gender">
              <option value="">Select</option>
              <option value="male" <?= ($gender == 'male') ? 'selected' : '' ?>>Male</option>
              <option value="female" <?= ($gender == 'female') ? 'selected' : '' ?>>Female</option>
              <option value="other" <?= ($gender == 'other') ? 'selected' : '' ?>>Other</option>
            </select>
            <?= errorField($errors, 'gender') ?>
          </div>

          <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control <?= isset($errors['dob']) ? 'is-invalid' : '' ?>" id="dob" name="dob" value="<?= htmlspecialchars($dob) ?>">
            <?= errorField($errors, 'dob') ?>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control <?= isset($errors['phone']) ? 'is-invalid' : '' ?>" id="phone" name="phone" value="<?= htmlspecialchars($phonenumber) ?>">
            <?= errorField($errors, 'phone') ?>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= htmlspecialchars($email) ?>">
            <?= errorField($errors, 'email') ?>
          </div>

          <h3>Address Details</h3>

          <div class="mb-3">
            <label for="street" class="form-label">Street:</label>
            <input type="text" class="form-control <?= isset($errors['street']) ? 'is-invalid' : '' ?>" id="street" name="street" value="<?= htmlspecialchars($street) ?>">
            <?= errorField($errors, 'street') ?>
          </div>

          <div class="mb-3">
            <label for="city" class="form-label">City:</label>
            <input type="text" class="form-control <?= isset($errors['city']) ? 'is-invalid' : '' ?>" id="city" name="city" value="<?= htmlspecialchars($city) ?>">
            <?= errorField($errors, 'city') ?>
          </div>

          <div class="mb-3">
            <label for="province" class="form-label">Province/State:</label>
            <input type="text" class="form-control <?= isset($errors['province']) ? 'is-invalid' : '' ?>" id="province" name="province" value="<?= htmlspecialchars($province) ?>">
            <?= errorField($errors, 'province') ?>
          </div>

          <div class="mb-3">
            <label for="zip" class="form-label">ZIP Code:</label>
            <input type="text" class="form-control <?= isset($errors['zip']) ? 'is-invalid' : '' ?>" id="zip" name="zip" value="<?= htmlspecialchars($zip) ?>">
            <?= errorField($errors, 'zip') ?>
          </div>

          <div class="mb-4">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control <?= isset($errors['country']) ? 'is-invalid' : '' ?>" id="country" name="country" value="<?= htmlspecialchars($country) ?>">
            <?= errorField($errors, 'country') ?>
          </div>

          <h3>Account Details</h3>

          <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control <?= isset($errors['username']) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= htmlspecialchars($username) ?>">
            <?= errorField($errors, 'username') ?>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" id="password" name="password">
            <?= errorField($errors, 'password') ?>
          </div>

          <div class="mb-4">
            <label for="confirmPassword" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control <?= isset($errors['confirm_password']) ? 'is-invalid' : '' ?>" id="confirmPassword" name="confirm_password">
            <?= errorField($errors, 'confirm_password') ?>
          </div>

          <div class="mb-3">
            <button type="reset" class="btn btn-secondary w-100">Reset</button>
          </div>
          <button type="submit" class="btn btn-secondary w-100">Register</button>
        </form>
      </div>
    </section>
  </main>

  <footer class="text-center py-3">
    &copy; 2025 WG Hotels. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>