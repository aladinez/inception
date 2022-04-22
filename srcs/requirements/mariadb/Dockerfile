FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install mariadb-server procps -y
COPY conf/database.sql /
COPY conf/setup.sh / 
COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY conf/my.cnf /etc/mysql/my.cnf

ENTRYPOINT sh /setup.sh