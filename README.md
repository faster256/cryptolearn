# Cryptolearn

Освітня платформа для вивчення криптографії та інформаційної безпеки.  
Проєкт містить базову структуру веб‑додатку з автентифікацією користувачів, курсами та системою відстеження прогресу.

## 📂 Структура репозиторію
- `admin/` – панель адміністратора
- `components/` – модулі інтерфейсу
- `courses/` – сторінки курсів
- `css/` – стилі сайту
- `db/` – SQL‑скрипти для створення бази даних
- `img/` – зображення
- `includes/` – загальні частини сайту (header, footer)
- `js/` – JavaScript‑файли
- `php/` – серверна логіка
- `users/` – сторінки користувачів
- `index.html`, `index.php` – головні сторінки
- `about.html`, `contact.html` – додаткові сторінки
- `login.php`, `register.php`, `logout.php`, `dashboard.php` – автентифікація та кабінет користувача

## 🚀 Запуск проєкту
1. Встановити XAMPP/MAMP або інший локальний сервер з підтримкою PHP та MySQL.
2. Імпортувати базу даних через phpMyAdmin, використовуючи файл з папки `db`.
3. Відкрити `index.php` у браузері за адресою `http://localhost/cryptolearn`.

## 📜 Ліцензія
Проєкт поширюється за умовами ліцензії MIT. Деталі див. у файлі `LICENSE`.

## Getting Started (Open Server)

### Необхідні залежності
- Open Server
- PHP >= 8.0
- MySQL >= 5.7
- phpMyAdmin

### Кроки встановлення
1. Клонувати репозиторій:
   git clone https://github.com/faster256/cryptolearn.git
2. Запустити Open Server (Apache + MySQL).
3. Відкрити phpMyAdmin: http://localhost/phpmyadmin
4. Створити базу даних `cryptolearn`.
5. Імпортувати файл `db/schema.sql`.
6. Налаштувати `php/config.php`:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "cryptolearn";
