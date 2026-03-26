# Update Guide (Open Server)

### Підготовка
- Зробити резервну копію БД:
  mysqldump -u root -p cryptolearn > backup.sql
- Зберегти копію папки cryptolearn.

### Оновлення
1. Зупинити Open Server.
2. git pull origin main
3. Імпортувати нові SQL-скрипти (якщо є).
4. Оновити конфігурації.
5. Запустити Open Server.
6. Перевірити працездатність.

### Rollback
- Відновити БД з backup.sql.
- Відновити файли з резервної копії.
