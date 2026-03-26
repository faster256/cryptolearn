<?php
require '../db/connect.php';
require 'auth.php';
include '../includes/admin_header.php';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $q = trim($_POST['question']);
  $opt1 = trim($_POST['opt1']);
  $opt2 = trim($_POST['opt2']);
  $opt3 = trim($_POST['opt3']);
  $correct = trim($_POST['correct']);
  if (!$q || !$opt1 || !$opt2 || !$correct) $errors[] = 'Заповніть обов\'язкові поля';
  if (empty($errors)) {
    $options = json_encode([$opt1,$opt2,$opt3]);
    $stmt = $pdo->prepare("INSERT INTO quizzes (question,options,correct) VALUES (?,?,?)");
    $stmt->execute([$q,$options,$correct]);
    header('Location: quizzes.php'); exit;
  }
}
?>
<h2 class="text-xl font-semibold mb-4">Додати питання</h2>
<?php if ($errors) foreach($errors as $err) echo "<div class='text-red-600 mb-2'>".htmlspecialchars($err)."</div>"; ?>
<form method="post" class="space-y-3 max-w-lg">
  <textarea name="question" placeholder="Питання" class="w-full border p-2"></textarea>
  <input name="opt1" placeholder="Варіант 1 (обов'язково)" class="w-full border p-2" />
  <input name="opt2" placeholder="Варіант 2 (обов'язково)" class="w-full border p-2" />
  <input name="opt3" placeholder="Варіант 3 (необов'язково)" class="w-full border p-2" />
  <input name="correct" placeholder="Текст правильної відповіді" class="w-full border p-2" />
  <button class="bg-green-600 text-white px-4 py-2 rounded">Додати</button>
</form>
<?php include '../includes/footer.php'; ?>
