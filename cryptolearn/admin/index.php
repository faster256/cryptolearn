<?php
require '../db/connect.php';
require 'auth.php';
include '../includes/admin_header.php';
?>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
  <a href="users.php" class="p-4 border rounded">Користувачі</a>
  <a href="courses.php" class="p-4 border rounded">Курси</a>
  <a href="quizzes.php" class="p-4 border rounded">Тести</a>
</div>
<?php include '../includes/footer.php'; ?>
