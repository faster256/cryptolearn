<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: ../index.html");
  exit();
}
$level = $_SESSION['level'];
?>
<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Кабінет користувача</title>
</head>
<body>
  <h1>Вітаємо в CryptoLearn!</h1>
  <p>Ваш рівень: <?= htmlspecialchars($level) ?></p>
  <a href="../courses/<?= $level ?>.html">Перейти до курсів</a>
</body>
</html>
