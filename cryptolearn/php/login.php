<?php
session_start();
require '../db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$_POST['email']]);
  $user = $stmt->fetch();

  if ($user && password_verify($_POST['password'], $user['password_hash'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['level'] = $user['level'];
    header("Location: ../users/dashboard.php");
  } else {
    echo "Невірні дані!";
  }
}
?>
