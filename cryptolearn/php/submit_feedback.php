<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/db/connect.php';

// решта коду для відправки відгуку
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $feedback = $_POST['feedback'] ?? '';

    $stmt = $pdo->prepare("INSERT INTO feedback (message) VALUES (:message)");
    $stmt->execute(['message' => $feedback]);

    echo "Дякуємо за ваш відгук!";
}
?>
