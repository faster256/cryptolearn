<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/db/connect.php';
?>

<div class="grid md:grid-cols-4 gap-8">
    <section class="md:col-span-2 bg-white border border-gray-100 rounded p-6">
        <h1 class="text-3xl font-bold mb-3" data-i18n="site_title">CryptoLearn</h1>
        <p class="text-gray-700 mb-4">
            CryptoLearn — мінімалістична освітня платформа для вивчення криптовалют та блокчейн-технологій.
            Тут ви знайдете курси для початківців і просунутих, практичні вправи та тести.
        </p>
        <div class="flex space-x-3">
            <a href="/register.php"
               class="px-4 py-2 bg-blue-600 text-white rounded"
               data-i18n="btn_start">Почати</a>
            <a href="/courses/basics.php"
               class="px-4 py-2 border rounded text-sm">Курси</a>
        </div>
    </section>

    <section class="md:col-span-2 space-y-4">
        <?php
        $courses = $pdo->query("SELECT * FROM courses ORDER BY id ASC")->fetchAll();
        foreach ($courses as $course) {
            $slug  = $course['slug'];
            $title = htmlspecialchars($course['title']);
            $desc  = htmlspecialchars($course['description']);
            $link  = '/courses/' . $slug . '.php';

            echo '<div class="bg-white border border-gray-100 rounded p-5 shadow-sm">';
            echo '<h3 class="text-lg font-semibold mb-2" data-i18n="course_' . $slug . '_title">' . $title . '</h3>';
            echo '<p class="text-sm text-gray-600 mb-4" data-i18n="course_' . $slug . '_desc">' . $desc . '</p>';
            echo '<a href="' . $link . '" class="inline-block px-4 py-2 border rounded text-sm hover:bg-gray-50" data-i18n="btn_start">Почати</a>';
            echo '</div>';
        }
        ?>
    </section>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
?>
