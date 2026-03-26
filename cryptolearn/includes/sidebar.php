<?php
// sidebar.php — used in dashboard/admin pages (desktop)
?>
<aside class="hidden md:block w-64 mr-8">
  <div class="sticky top-6">
    <nav class="bg-white border border-gray-100 rounded p-4 space-y-2">
      <a href="/dashboard.php" class="block py-2 px-3 rounded hover:bg-gray-50" data-i18n="menu_dashboard">Кабінет</a>
      <a href="/courses/basics.php" class="block py-2 px-3 rounded hover:bg-gray-50" data-i18n="menu_basics">Основи</a>
      <a href="/courses/security.php" class="block py-2 px-3 rounded hover:bg-gray-50" data-i18n="menu_security">Безпека</a>
      <a href="/courses/trading.php" class="block py-2 px-3 rounded hover:bg-gray-50" data-i18n="menu_trading">Трейдинг</a>
      <a href="/courses/quiz.php" class="block py-2 px-3 rounded hover:bg-gray-50" data-i18n="menu_quiz">Тести</a>
      <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        <a href="/admin/index.php" class="block py-2 px-3 rounded hover:bg-gray-50 mt-4 font-medium" data-i18n="menu_admin">Адмінка</a>
      <?php endif; ?>
    </nav>
  </div>
</aside>
