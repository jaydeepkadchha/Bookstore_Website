<link rel="stylesheet" href="assets/css/form.css">

<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user input
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    // Insert user into the database
    $sql = "INSERT INTO users (user_name, full_name, email, password, phone_number, address, role)
            VALUES ('$username', '$fullname', '$email', '$password', '$phonenumber', '$address', '$role')";

    if (mysqli_query($conn,$sql) === TRUE) {
        header("Location: manage_users.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Add User</title>
  <link rel="icon" href="assets/img/logo5.png">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="container">
    <h2 class="text-center">Add New User</h2>
    <form method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number</label>
        <input type="text" id="phonenumber" name="phonenumber" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role" class="form-control" required>
          <option value="admin">Admin</option>
          <option value="customer">Customer</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Add User</button>
    </form>
  </div>

</body>

</html>
