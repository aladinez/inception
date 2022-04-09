FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install mariadb-server -y
COPY database.sql /
COPY setup.sh / 
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/

ENTRYPOINT sh /setup.sh