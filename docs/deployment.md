# Deployment Guide (Open Server)

### Вимоги
- Open Server (Apache, PHP, MySQL)
- RAM: 2 GB
- Disk: 2 GB

### Кроки розгортання
1. Встановити Open Server.
2. Клонувати репозиторій у папку domains:
   git clone https://github.com/твій-логін/cryptolearn.git
3. Створити базу даних `cryptolearn` у phpMyAdmin.
4. Імпортувати db/schema.sql.
5. Налаштувати php/config.php.
6. Запустити Open Server і відкрити http://localhost/cryptolearn
