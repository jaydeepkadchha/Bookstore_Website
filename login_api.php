<?php
header('Content-Type: application/json');
session_start();
include 'db.php';

$response = ['status' => 'error', 'message' => 'Invalid input'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $captcha = $_POST['g-recaptcha-response'] ?? '';

    // ✅ reCAPTCHA verify
    $secretKey = "6LdzTWUrAAAAAMNRdFF_SmZdsIuHTmYA8mR6tr81";
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}");
    $captchaSuccess = json_decode($verify)->success;

    if (!$captchaSuccess) {
        $response['message'] = "CAPTCHA failed. Try again.";
        echo json_encode($response);
        exit;
    }

    // ✅ Check user
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['role'] = $user['role'];
            $response = [
                'status' => 'success',
                'role' => $user['role']
            ];
        } else {
            $response['message'] = 'Incorrect password';
        }
    } else {
        $response['message'] = 'User not found';
    }
}

echo json_encode($response);
?>
