<?php
require '../db/connect.php';
include '../includes/header.php';
?>
<div class="flex flex-col md:flex-row">
  <?php include '../includes/sidebar.php'; ?>
  <section class="flex-1 bg-white border rounded p-6">
    <h2 class="text-2xl font-semibold mb-4">Тести</h2>

    <form id="quiz" class="space-y-4">
      <div>
        <p class="font-medium">1) Що таке блокчейн?</p>
        <label class="block"><input type="radio" name="q1" value="a"> Розподілена база даних</label>
        <label class="block"><input type="radio" name="q1" value="b"> Централізований сервер</label>
      </div>
      <div>
        <p class="font-medium">2) Що таке приватний ключ?</p>
        <label class="block"><input type="radio" name="q2" value="a"> Пароль, що дозволяє підписувати транзакції</label>
        <label class="block"><input type="radio" name="q2" value="b"> Публічна адреса</label>
      </div>
      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Перевірити</button>
    </form>

    <div id="res" class="mt-4"></div>

    <script>
      document.getElementById('quiz').addEventListener('submit', function(e){
        e.preventDefault();
        let score = 0;
        if (document.querySelector('input[name="q1"]:checked')?.value === 'a') score++;
        if (document.querySelector('input[name="q2"]:checked')?.value === 'a') score++;
        document.getElementById('res').textContent = 'Ваш результат: ' + score + '/2';
      });
    </script>

  </section>
</div>
<?php include '../includes/footer.php'; ?>
