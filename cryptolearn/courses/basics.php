<?php
require '../db/connect.php';
include '../includes/header.php';
?>
<div class="flex flex-col md:flex-row">
  <?php include '../includes/sidebar.php'; ?>
  <section class="flex-1 bg-white border rounded p-6">
    <h2 class="text-2xl font-semibold mb-4">Основи криптовалют</h2>

    <p class="text-gray-700 mb-4">
      У цьому курсі ми детально розглянемо концепцію блокчейн, як працюють транзакції, особливості біткоїна та інших основних криптовалют. Курс орієнтований на тих, хто лише починає знайомство з темою.
    </p>

    <article class="mb-6">
      <h3 class="font-semibold mb-2">Модуль 1: Вступ до блокчейн</h3>
      <p class="text-gray-600">Пояснимо базові поняття: блок, ланцюг блоків, розподілена мережа, майнінг, консенсусні механізми.</p>
    </article>

    <article class="mb-6">
      <h3 class="font-semibold mb-2">Модуль 2: Як працюють криптовалюти</h3>
      <p class="text-gray-600">Створення та передача токенів, адреси, приватні ключі, гаманці (custodial та non-custodial).</p>
    </article>

    <article class="mb-6">
      <h3 class="font-semibold mb-2">Модуль 3: Практичні кроки</h3>
      <p class="text-gray-600">Створення гаманця, приклади транзакцій, базові операції на біржах, правила безпеки.</p>
    </article>

    <a href="/courses/quiz.php" class="inline-block mt-4 bg-green-600 text-white px-4 py-2 rounded">Пройти тест по курсу</a>
  </section>
</div>
<?php include '../includes/footer.php'; ?>
