FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install nginx -y
RUN mkdir /etc/nginx/ssl
COPY conf/default /etc/nginx/sites-enabled/default
COPY conf/nginx.crt conf/nginx.key /etc/nginx/ssl/

ENTRYPOINT nginx -g 'daemon off;'


