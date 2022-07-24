service mysql start;

# mysql -e "CREATE DATABASE IF NOT EXISTS ${DB_DATABASE}";
# mysql -e "CREATE USER IF NOT EXISTS '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}'";
# mysql -e "GRANT ALL PRIVILEGES ON ${DB_DATABASE}.* TO '${DB_USER}'@'%'";
# #mysql wordpress -u root < ./example.sql
# mysql -e "ALTER USER '${DB_ROOT}'@'localhost' IDENTIFIED BY '${DB_ROOTPASSWORD}'; FLUSH PRIVILEGES;"
# mysqladmin -u${DB_ROOT} -p${DB_ROOTPASSWORD} shutdown

mysql -e "CREATE DATABASE IF NOT EXISTS $DB_DATABASE";
mysql -e "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD'";
mysql -e "GRANT ALL PRIVILEGES ON $DB_DATABASE.* TO '$DB_USER'@'%'";
# mysql $DB_DATABASE -u root < ./wp_backup.sql
mysql -e "ALTER USER '$DB_ROOT'@'localhost' IDENTIFIED BY '$DB_ROOTPASSWORD'; FLUSH PRIVILEGES;"
mysqladmin -u$DB_ROOT -p$DB_ROOTPASSWORD shutdown


exec mysqld

