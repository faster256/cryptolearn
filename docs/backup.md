# Backup Guide (Open Server)

### Стратегія
- Повні копії щотижня.
- Інкрементальні щодня.

### Процедура
1. База даних:
   mysqldump -u root -p cryptolearn > backups/db_$(date +%F).sql
2. Файли:
   zip -r backups/files_$(date +%F).zip cryptolearn/

### Відновлення
- mysql -u root -p cryptolearn < backups/db_last.sql
- unzip backups/files_last.zip -d cryptolearn/
