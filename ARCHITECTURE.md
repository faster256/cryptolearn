# Архітектура проєкту Cryptolearn

## Основні компоненти
- Веб-сервер: Apache (Open Server)
- Application server: PHP
- СУБД: MySQL (phpMyAdmin для адміністрування)
- Файлове сховище: директорії img/, users/, courses/
- Кешування: відсутнє

## Схема
Browser → Apache (Open Server) → PHP → MySQL
                             → File Storage (img/, users/, courses/)
