<link rel="stylesheet" href="assets/css/form.css">

<?php
include("db.php");

if (isset($_GET['user_name'])) {
    $username = $_GET['user_name']; // Capture the username from the GET parameter

    // Fetch user details for editing
    $sql = "SELECT * FROM users WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get updated user data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    // Update user in the database
    $sql = "UPDATE users SET full_name='$fullname', email='$email', 
            phone_number='$phonenumber', address='$address', role='$role' 
            WHERE user_name='$username'"; // Use $username here to target the correct user

    if (mysqli_query($conn, $sql)) {
        header("Location: manage_users.php"); // Redirect after successful update
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); // Show error if something goes wrong
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
  <title>Edit User</title>
  <link rel="icon" href="assets/img/logo5.png">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <div class="container">
    <h2 class="text-center">Edit User</h2>
    <form method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" value="<?php echo $user['user_name']; ?>" disabled required>
      </div>
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" class="form-control" value="<?php echo $user['full_name']; ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number</label>
        <input type="text" id="phonenumber" name="phonenumber" class="form-control" value="<?php echo $user['phone_number']; ?>" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" class="form-control" required><?php echo $user['address']; ?></textarea>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role" class="form-control" required>
          <option value="admin" <?php echo ($user['role'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
          <option value="customer" <?php echo ($user['role'] == 'customer') ? 'selected' : ''; ?>>Customer</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Update User</button>
    </form>
  </div>

</body>

</html>
