<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
if(isset($_POST['register'])){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form
        $username = $_POST['user_name'];
        $fullname = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        $address = $_POST['address'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
    
        // Check password match
        if ($password !== $confirmPassword) {
            die("Passwords do not match.");
        }
    
        // Connect to database (example)
        $conn = new mysqli("localhost", "root", "", "bookbyte");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Insert user
        $sql = "INSERT INTO users (user_name, full_name, email, phone_number, address, role, password) 
                VALUES ('$username', '$fullname', '$email', '$phone', '$address', '$role', '$password')";
    
        if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

    
        $conn->close();
    }
}
?>
