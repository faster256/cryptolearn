<?php
require '../db/connect.php';
require 'auth.php';
include '../includes/admin_header.php';

$users = $pdo->query("SELECT id,email,role,level,created_at FROM users ORDER BY id DESC")->fetchAll();
?>
<h2 class="text-xl font-semibold mb-4">Користувачі</h2>
<table class="w-full border">
  <thead><tr><th class="p-2">ID</th><th class="p-2">Email</th><th class="p-2">Роль</th><th class="p-2">Рівень</th><th class="p-2">Дата</th></tr></thead>
  <tbody>
    <?php foreach($users as $u): ?>
    <tr class="border-t">
      <td class="p-2"><?= $u['id'] ?></td>
      <td class="p-2"><?= htmlspecialchars($u['email']) ?></td>
      <td class="p-2"><?= $u['role'] ?></td>
      <td class="p-2"><?= $u['level'] ?></td>
      <td class="p-2"><?= $u['created_at'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php include '../includes/footer.php'; ?>
