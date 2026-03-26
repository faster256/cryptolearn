<?php
require 'db/connect.php';
include 'includes/header.php';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email'] ?? '');
  $password = $_POST['password'] ?? '';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Невірний email';
  if (strlen($password) < 6) $errors[] = 'Пароль має бути мінімум 6 символів';
  if (empty($errors)) {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) $errors[] = 'Користувач вже існує';
    else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $pdo->prepare("INSERT INTO users (email, password_hash) VALUES (?,?)")->execute([$email, $hash]);
      header('Location: login.php');
      exit;
    }
  }
}
?>
<div class="max-w-md mx-auto bg-white border rounded p-6">
  <h2 class="text-xl font-semibold mb-4" data-i18n="register_title">Реєстрація</h2>
  <?php if ($errors): ?>
    <div class="mb-4 text-sm text-red-600">
      <?php foreach ($errors as $e) echo "<div>" . htmlspecialchars($e) . "</div>"; ?>
    </div>
  <?php endif; ?>
  <form method="post" class="space-y-3">
    <label class="block">
      <span class="text-sm text-gray-700">Email</span>
      <input type="email" name="email" required class="mt-1 block w-full border rounded p-2" />
    </label>
    <label class="block">
      <span class="text-sm text-gray-700">Пароль</span>
      <input type="password" name="password" required class="mt-1 block w-full border rounded p-2" />
    </label>
    <button class="w-full bg-blue-600 text-white py-2 rounded">Зареєструватись</button>
  </form>
</div>
<?php include 'includes/footer.php'; ?>
