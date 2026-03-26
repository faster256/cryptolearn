<?php
// header.php — безпечне підключення
?>
<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CryptoLearn</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-white text-gray-900">
  <header class="w-full border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
      <a href="/" class="text-xl font-semibold">CryptoLearn</a>
      <div class="flex items-center space-x-3">
        
        <nav class="sm:flex space-x-4">
          <a href="/" class="text-sm hover:underline">Головна</a>
          <a href="/courses/basics.php" class="text-sm hover:underline">Курси</a>
          <a href="/dashboard.php" class="text-sm hover:underline">Кабінет</a>
        </nav>
      </div>
    </div>
  </header>
  <main class="max-w-6xl mx-auto px-4 py-8">