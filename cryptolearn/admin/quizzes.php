<?php
require '../db/connect.php';
require 'auth.php';
include '../includes/admin_header.php';
$qs = $pdo->query("SELECT * FROM quizzes ORDER BY id DESC")->fetchAll();
?>
<h2 class="text-xl font-semibold mb-4">Питання</h2>
<a href="add_question.php" class="inline-block mb-4 bg-yellow-500 text-white px-3 py-1 rounded">Додати питання</a>
<table class="w-full border">
  <thead><tr><th class="p-2">ID</th><th class="p-2">Питання</th><th class="p-2">Правильна</th></tr></thead>
  <tbody>
    <?php foreach($qs as $q): ?>
    <tr class="border-t">
      <td class="p-2"><?= $q['id'] ?></td>
      <td class="p-2"><?= htmlspecialchars($q['question']) ?></td>
      <td class="p-2"><?= htmlspecialchars($q['correct']) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include '../includes/footer.php'; ?>
