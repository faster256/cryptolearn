<?php
$pdo = new PDO("mysql:host=MySQL-8.4;dbname=cryptolearn;", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>