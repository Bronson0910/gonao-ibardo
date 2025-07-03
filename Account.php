<?php
session_start();
if (!isset($_SESSION['user_data'])) {
  header("Location: login.php");
  exit;
} else {
  $user = $_SESSION['user_data'];

  $fullname = $user[0];
  $gender = $user[1];
  $dob = $user[2];
  $phone = $user[3];
  $email = $user[4];
  $street = $user[5];
  $city = $user[6];
  $province = $user[7];
  $zip = $user[8];
  $country = $user[9];
  $username = $user[10];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The WG Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="welcome.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: skyblue;">WJ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="WhatWeOffer.php">What We Offer</a></li>
          <li class="nav-item"><a class="nav-link" href="Account.php">Account</a></li>
          <li class="nav-item"><a class="nav-link" href="Reserved.php">Reserve</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-5 pt-5">

    

    <div class="col-lg-10 mx-auto">
      <div class="bg-white rounded p-5 shadow text-start">
        <h4 class="mb-4 text-center">Personal Information</h4>
        <div class="row">
          <div class="col-md-6 mb-3"><strong>Name:</strong> <?php echo $fullname; ?></div>
          <div class="col-md-6 mb-3"><strong>Gender:</strong> <?php echo $gender; ?></div>
          <div class="col-md-6 mb-3"><strong>Date of Birth:</strong> <?php echo $dob; ?></div>
          <div class="col-md-6 mb-3"><strong>Phone:</strong> <?php echo $phone; ?></div>
          <div class="col-md-6 mb-3"><strong>Email:</strong> <?php echo $email; ?></div>
          <div class="col-md-6 mb-3"><strong>Street:</strong> <?php echo $street; ?></div>
          <div class="col-md-6 mb-3"><strong>City:</strong> <?php echo $city; ?></div>
          <div class="col-md-6 mb-3"><strong>Province:</strong> <?php echo $province; ?></div>
          <div class="col-md-6 mb-3"><strong>ZIP:</strong> <?php echo $zip; ?></div>
          <div class="col-md-6 mb-3"><strong>Country:</strong> <?php echo $country; ?></div>
          <div class="col-md-6 mb-3"><strong>Username:</strong> <?php echo $username; ?></div>
        </div>
        <div class="text-end mt-4">
          <a href="index.php" class="btn btn-secondary">Logout</a>
      </div>
      </div>
    </div>
  </main>

 
  <footer class="text-center mt-5 py-3 bg-light">
    &copy; 2025 WG Hotels. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
