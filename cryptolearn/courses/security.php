<?php
require '../db/connect.php';
include '../includes/header.php';
?>
<div class="flex flex-col md:flex-row">
  <?php include '../includes/sidebar.php'; ?>
  <section class="flex-1 bg-white border rounded p-6">
    <h2 class="text-2xl font-semibold mb-4">Безпека та збереження</h2>

    <p class="text-gray-700 mb-4">
      Курс зосереджений на практичних аспектах безпеки: апаратні гаманці, резервні фрази, захист від фішингу, управління ключами й комплаєнс.
    </p>

    <article class="mb-6">
      <h3 class="font-semibold mb-2">Апаратні гаманці</h3>
      <p class="text-gray-600">Що таке апаратний гаманець, як ним користуватися, як зберігати seed-фрази.</p>
    </article>

    <article class="mb-6">
      <h3 class="font-semibold mb-2">Захист від шахрайств</h3>
      <p class="text-gray-600">Розпізнавання фішингових сайтів, безпечні практики для облікових записів та 2FA.</p>
    </article>
  </section>
</div>
<?php include '../includes/footer.php'; ?>
