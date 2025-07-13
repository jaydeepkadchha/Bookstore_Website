<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ✅ STEP 1: CAPTCHA verification
    if (empty($_POST['g-recaptcha-response'])) {
        die("Please confirm you are not a robot.");
    }

    $secretKey = "6LdzTWUrAAAAAMNRdFF_SmZdsIuHTmYA8mR6tr81"; // 🔁 Replace with your actual reCAPTCHA secret key
    $captchaResponse = $_POST['g-recaptcha-response'];
    $verifyURL = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents($verifyURL . "?secret=$secretKey&response=$captchaResponse");
    $responseData = json_decode($response);

    if (!$responseData->success) {
        die("CAPTCHA verification failed. Please try again.");
    }

    // ✅ STEP 2: Login logic
    $user_name = $_POST['username'];
    $password1 = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $password2 = $row['password'];

        if (password_verify($password1, $password2)) {
 
            // Set session variables
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['role'] = $row['role'];

            // Redirect based on role
            if ($row['role'] == 'admin') {
                header("Location: admin_index.php");
            } else if ($row['role'] == 'customer') {
                header("Location: index.php");
            } else {
                echo "Unknown role.";
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>
