<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/db/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute([
        'username' => $username,
        'password' => $hashedPassword
    ]);

    echo "Реєстрація успішна!";
}
?>
