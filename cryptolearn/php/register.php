<?php
require '../db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $stmt = $pdo->prepare("INSERT INTO users (email, password_hash, level) VALUES (?, ?, 'beginner')");
  $stmt->execute([$email, $password]);
  header("Location: ../users/dashboard.php");
}
?>
