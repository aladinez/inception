FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install mariadb-server procps -y
COPY database.sql /
COPY setup.sh / 
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY my.cnf /etc/mysql/my.cnf

ENTRYPOINT sh /setup.sh