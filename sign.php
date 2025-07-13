<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sign In - BookReBoot</title>
  <link rel="icon" href="assets/img/logo5.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .sign-section {
      padding: 120px 0 60px 0;
      min-height: 100vh;
      background: linear-gradient(rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.05));
      background-color: #1e4356;
    }

    .sign-box {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

    .sign-box .form-control {
      padding: 12px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .sign-box .btn-sign {
      padding: 12px 30px;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s;
      background: #001f3f;
      color: #fff;
      border: none;
    }

    .sign-box .btn-sign:hover {
      background: #003366;
    }
  </style>
</head>

<body class="sign-page">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db.php";

    $user_name = $_POST['user_name'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validation
    if (!preg_match("/^[a-zA-Z0-9_]{4,20}$/", $user_name)) {
        die("Username must be 4-20 characters long, only letters, numbers, and underscores.");
    }

    if (!preg_match("/^[a-zA-Z ]+$/", $full_name)) {
        die("Full name must contain only letters and spaces.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        die("Phone number must be exactly 10 digits.");
    }

    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{6,20}$/", $password)) {
        die("Password must be 6–20 characters, contain at least 1 uppercase letter and 1 number.");
    }

    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user_name, full_name, email, phone_number, address, role, password)
            VALUES ('$user_name', '$full_name', '$email', '$phone', '$address', '$role', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Database error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<header id="header" class="header d-flex align-items-center fixed-top mt-4">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/img/logo5.png" alt="" class="img-fluid rounded-5">
      <h1 class="sitename">BookByte</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li class="dropdown"><a href="#"><span>Books</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="fiction.php">Fiction</a></li>
            <li><a href="Nonfiction.php">Non-Fiction</a></li>
            <li><a href="children.php">Children</a></li>
            <li><a href="comics.php">Comics</a></li>
            <li><a href="manga.php">Manga</a></li>
          </ul>
        </li>
        <li><a href="bestseller.php">Best Seller</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="addtocart.php">Cart</a></li>
        <li><a href="login.html">Log In</a></li>
        <li><a href="sign.php">Sign Up</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>

<main class="main">
  <section class="sign-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
          <div class="sign-box">
            <h2 class="text-center mb-4">Create an Account</h2>
            <form action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="user_name" placeholder="User Name" required>
                <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                <input type="number" class="form-control" name="phone_number" placeholder="Contact Number" required>
                <textarea name="address" id="address" placeholder="Address" class="form-control" required></textarea>
                <label><input type="radio" name="role" value="customer" required> Customer</label>
                <!-- <label><input type="radio" name="role" value="admin" required> Admin</label> -->
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                <input type="submit" name="register" value="Register" class="btn btn-primary">
              </div>
            </form>
            <p class="text-center mt-4">
              Already have an account? <a href="login.html">Log in</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>
