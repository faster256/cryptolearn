<?php
require '../db/connect.php';
include '../includes/header.php';
?>
<div class="flex flex-col md:flex-row">
  <?php include '../includes/sidebar.php'; ?>
  <section class="flex-1 bg-white border rounded p-6">
    <h2 class="text-2xl font-semibold mb-4">Основи трейдингу</h2>

    <p class="text-gray-700 mb-4">
      Курс дає практичні знання щодо технічного аналізу, стратегії управління ризиками, психології торгівлі та практики торгівлі на спотових ринках.
    </p>

    <article class="mb-6">
      <h3 class="font-semibold mb-2">Технічний аналіз</h3>
      <p class="text-gray-600">Підбір індикаторів, свічкові патерни, підтримка і опір.</p>
    </article>

    <article class="mb-6">
      <h3 class="font-semibold mb-2">Ризик-менеджмент</h3>
      <p class="text-gray-600">Позиційний розмір, стоп-лоси, допустимий ризик.</p>
    </article>
  </section>
</div>
<?php include '../includes/footer.php'; ?>
