@echo off
echo Creating backup...
mysqldump -u root -p cryptolearn > backup.sql
zip -r backup_files.zip cryptolearn\
echo Backup completed!
