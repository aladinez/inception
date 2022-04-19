#!/bin/bash

if [ -d "/var/lib/mysql/${DB_NAME}" ]
then
echo "Directory already exist"
else
    service mysql start
    mysql -u root -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME};CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' identified by '${MYSQL_PASSWORD}';GRANT ALL ON *.* to '${MYSQL_USER}'@'%' WITH GRANT OPTION;FLUSH PRIVILEGES;"
    #grant all tables on all databases to $name , with ability to grant any other user (with grant optin).
    mysql < /database.sql -u ${MYSQL_USER} -p${MYSQL_PASSWORD} wordpress
    mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';FLUSH PRIVILEGES;"
    service mysql stop
fi

mysqld_safe
