<link rel="stylesheet" href="assets/css/form.css">

<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user input
    $categoryname = $_POST['categoryname'];
   

    // Insert user into the database
    $sql = "INSERT INTO category (category_name)
            VALUES ('$categoryname')";

    if (mysqli_query($conn,$sql) === TRUE) {
        header("Location: manage_categories.php");
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
    <h2 class="text-center">Add New Category</h2>
    <form method="POST">
      <div class="form-group">
        <label for="categoryname">Category Name</label>
        <input type="text" id="categoryname" name="categoryname" class="form-control" required>
      </div>
      
      <button type="submit" class="btn btn-success">Add Category</button>
    </form>
  </div>

</body>

</html>
