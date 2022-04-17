#!/bin/bash

if [ -d "/var/lib/mysql/${DB_NAME}" ]
then
echo "Directory already exist"
else
    service mysql start
    user="root"
    dbname="wordpress"
    name="alae"
    pass="alae123"
    mysql -u $user -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME};CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' identified by '${MYSQL_PASSWORD}';GRANT ALL ON *.* to '${MYSQL_USER}'@'%' WITH GRANT OPTION;FLUSH PRIVILEGES;"
    #grant all tables on all databases to $name , with ability to grant any other user (with grant optin).
    mysql < /database.sql -u $name -p$pass wordpress
    # mysqladmin -u root shutdown
    service mysql stop
fi



mysqld_safe
