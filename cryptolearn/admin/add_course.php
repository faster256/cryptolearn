<?php
require '../db/connect.php';
require 'auth.php';
include '../includes/admin_header.php';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $slug = trim($_POST['slug']);
  $title = trim($_POST['title']);
  $desc = trim($_POST['description']);
  $level = $_POST['level'];
  if (!$slug || !$title) $errors[] = 'Заповніть всі поля';
  if (empty($errors)) {
    $stmt = $pdo->prepare("INSERT INTO courses (slug,title,description,level) VALUES (?,?,?,?)");
    $stmt->execute([$slug,$title,$desc,$level]);
    header('Location: courses.php'); exit;
  }
}
?>
<h2 class="text-xl font-semibold mb-4">Додати курс</h2>
<?php if ($errors) foreach($errors as $err) echo "<div class='text-red-600 mb-2'>".htmlspecialchars($err)."</div>"; ?>
<form method="post" class="space-y-3 max-w-lg">
  <input name="slug" placeholder="slug (наприклад: basics)" class="w-full border p-2" />
  <input name="title" placeholder="Назва курсу" class="w-full border p-2" />
  <textarea name="description" placeholder="Опис" class="w-full border p-2"></textarea>
  <select name="level" class="w-full border p-2">
    <option value="beginner">beginner</option>
    <option value="intermediate">intermediate</option>
    <option value="advanced">advanced</option>
  </select>
  <button class="bg-green-600 text-white px-4 py-2 rounded">Додати</button>
</form>
<?php include '../includes/footer.php'; ?>
