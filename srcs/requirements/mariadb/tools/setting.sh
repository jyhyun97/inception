service mysql start
echo "CREATE DATABASE wordpress;" | mysql
echo "CREATE USR 'jeonhyun'@'localhost' IDENTIFIED BY 'jeonhyun';" | mysql
echo "GRANT ALL PRIVILEGES ON *.* TO 'jeonhyun'@'localhost'WITH GRANT OPTION;" |mysql

