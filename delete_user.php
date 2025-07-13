<?php
include("db.php");

if (isset($_GET['user_name'])) {
    $id = $_GET['user_name'];

    // Delete user from the database
    $sql = "DELETE FROM users WHERE user_name = '$id'";

    if (mysqli_query($conn,$sql) === TRUE) {
        header("Location: manage_users.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
