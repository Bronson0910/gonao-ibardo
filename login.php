<?php
session_start();
require_once 'db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameInput = trim($_POST['username']);
    $passwordInput = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$usernameInput]);
        $user = $stmt->fetch();

        if ($user && password_verify($passwordInput, $user['password'])) {
            // Store user data in session (excluding password)
            $_SESSION['user'] = $usernameInput;
            $_SESSION['user_data'] = [
                $user['full_name'],
                $user['gender'],
                $user['dob'],
                $user['phone'],
                $user['email'],
                $user['street'],
                $user['city'],
                $user['province'],
                $user['zip'],
                $user['country'],
                $user['username']
            ];
            header("Location: welcome.php");
            exit;
        } else {
            $error = "Invalid username or password.";
        }

    } catch (PDOException $e) {
        die("Login failed: " . $e->getMessage());
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The WG Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top mb-5 mb-lg-0">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: skyblue;">WJ</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav> 

  <section class="login-section mb-5 mt-5">
    <div class="login-card">
      <h2>Login</h2>
      <form aria-label="Login form" method="POST" action="">
        <div class="mb-3">
          <label for="usernameInput" class="form-label">Username</label>
          <input type="text" class="form-control" id="usernameInput" name="username" required>
        </div>
        <div class="mb-4">
          <label for="passwordInput" class="form-label">Password</label>
          <input type="password" class="form-control" id="passwordInput" name="password" required>
        </div>
        <button type="submit" class="btn btn-submit" aria-label="Submit login form">
          Log In
        </button>
      </form>
    </div>
  </section>

  <footer>
    &copy; 2025 WG Hotels. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://fonts.googleapis.com/icon?family=Material+Icons"></script>
</body>
</html>