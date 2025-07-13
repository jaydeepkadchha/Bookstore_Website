<?php
session_start(); // Start session to access session variables
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to login page or index page after logout
header("Location: index.php");
exit();
?>
