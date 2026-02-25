<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $_SESSION['error'] = "Email already registered!";
        header("Location: index.php");
        exit();
    }

    $check->close();

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {

        $_SESSION['user_email'] = $email;
        $_SESSION['success'] = "Registration Successful!";

        header("Location: home.php");
        exit();

    } else {
        $_SESSION['error'] = "Registration failed!";
        header("Location: index.php");
        exit();
    }
}
?>