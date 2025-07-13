<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete user from the database
    $sql = "DELETE FROM category WHERE category_id = '$id'";

    if (mysqli_query($conn,$sql) === TRUE) {
        header("Location: manage_categories.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
