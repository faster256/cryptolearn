<?php
require 'db/connect.php';
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php'); exit;
}
include 'includes/header.php';
?>
<div class="flex flex-col md:flex-row">
  <?php include 'includes/sidebar.php'; ?>
  <section class="flex-1 bg-white border rounded p-6">
    <h2 class="text-2xl font-semibold mb-3">Кабінет</h2>
    <p class="text-gray-700 mb-4">Вітаємо! Тут ви можете обрати курс, пройти тест або перевірити свій прогрес.</p>
    <?php
    // show simple progress summary
    $uid = $_SESSION['user_id'];
    $stmt = $pdo->prepare("SELECT c.title, p.progress_percent FROM progress p JOIN courses c ON p.course_id = c.id WHERE p.user_id = ?");
    $stmt->execute([$uid]);
    $rows = $stmt->fetchAll();
    if ($rows) {
      echo "<div class='space-y-3'>";
      foreach ($rows as $r) {
        echo "<div class='p-3 border rounded'><div class='font-medium'>".htmlspecialchars($r['title'])."</div>";
        echo "<div class='text-sm text-gray-600'>Прогрес: ".intval($r['progress_percent'])."%</div></div>";
      }
      echo "</div>";
    } else {
      echo "<div class='text-gray-600'>Поки що немає прогресу. Розпочніть курс!</div>";
    }
    ?>
  </section>
</div>
<?php include 'includes/footer.php'; ?>
