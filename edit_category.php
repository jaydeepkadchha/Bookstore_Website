<link rel="stylesheet" href="assets/css/form.css">

<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Capture the username from the GET parameter

    // Fetch user details for editing
    $sql = "SELECT * FROM category WHERE category_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $category = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get updated user data
    $categoryname = $_POST['categoryname'];
   

    // Update user in the database
    $sql = "UPDATE category SET category_name='$categoryname' WHERE category_id='$id'"; // Use $username here to target the correct user

    if (mysqli_query($conn, $sql)) {
        header("Location: manage_categories.php"); // Redirect after successful update
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
    <h2 class="text-center">Edit Category</h2>
    <form method="POST">
      <div class="form-group">
        <label for="categoryname">Category Name</label>
        <input type="text" id="categoryname" name="categoryname" class="form-control" value="<?php echo $category['category_name']; ?>"required>
      </div>
      
      <button type="submit" class="btn btn-success">Update Category</button>
    </form>
  </div>

</body>

</html>
