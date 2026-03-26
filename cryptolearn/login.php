<?php
require 'db/connect.php';
session_start();
include 'includes/header.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'] ?? '';
  $pass = $_POST['password'] ?? '';
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();
  if ($user && password_verify($pass, $user['password_hash'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['level'] = $user['level'];
    header('Location: dashboard.php');
    exit;
  } else {
    $error = 'Невірні облікові дані';
  }
}
?>
<div class="max-w-md mx-auto bg-white border rounded p-6">
  <h2 class="text-xl font-semibold mb-4">Вхід</h2>
  <?php if ($error) echo "<div class='mb-3 text-red-600'>{$error}</div>"; ?>
  <form method="post" class="space-y-3">
    <label class="block">
      <span class="text-sm text-gray-700">Email</span>
      <input type="email" name="email" required class="mt-1 block w-full border rounded p-2" />
    </label>
    <label class="block">
      <span class="text-sm text-gray-700">Пароль</span>
      <input type="password" name="password" required class="mt-1 block w-full border rounded p-2" />
    </label>
    <div class="flex items-center justify-between">
      <button class="bg-blue-600 text-white px-4 py-2 rounded">Увійти</button>
      <a href="/register.php" class="text-sm text-blue-600">Реєстрація</a>
    </div>
  </form>
</div>
<?php include 'includes/footer.php'; ?>
