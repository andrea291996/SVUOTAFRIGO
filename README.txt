Per avere il db DA TERMINALE (apri il terminale dalla cartella SVUOTAFRIGO):
    (le virgolette iniziali sono essenziali)
    comando 1:
        "/c/Program Files/Ampps/mysql/bin/mysql.exe" -u root -p -e "CREATE DATABASE svuotafrigo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
        digita la password: mysql
    comando 2:
        "/c/Program Files/Ampps/mysql/bin/mysql.exe" -u root -p svuotafrigo < svuotafrigo_db.sql
____
Per importare il db:
    "/c/Program Files/Ampps/mysql/bin/mysqldump.exe" -u root -p svuotafrigo > svuotafrigo_db.sql



