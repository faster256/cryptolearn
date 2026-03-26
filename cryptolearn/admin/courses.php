<?php
require '../db/connect.php';
require 'auth.php';
include '../includes/admin_header.php';

$courses = $pdo->query("SELECT * FROM courses ORDER BY id DESC")->fetchAll();
?>
<h2 class="text-xl font-semibold mb-4">Курси</h2>
<a href="add_course.php" class="inline-block mb-4 bg-blue-600 text-white px-3 py-1 rounded">Додати курс</a>
<table class="w-full border">
  <thead><tr><th class="p-2">ID</th><th class="p-2">Заголовок</th><th class="p-2">Slug</th><th class="p-2">Рівень</th></tr></thead>
  <tbody>
    <?php foreach($courses as $c): ?>
    <tr class="border-t">
      <td class="p-2"><?= $c['id'] ?></td>
      <td class="p-2"><?= htmlspecialchars($c['title']) ?></td>
      <td class="p-2"><?= htmlspecialchars($c['slug']) ?></td>
      <td class="p-2"><?= $c['level'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include '../includes/footer.php'; ?>
