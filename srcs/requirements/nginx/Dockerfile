FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install nginx -y
# RUN apt install php-fpm php-common php-mbstring php-xmlrpc php-soap php-gd php-xml php-intl php-mysql php-cli php-zip php-curl -y
# RUN wget https://wordpress.org/latest.tar.gz
# RUN tar -zxvf latest.tar.gz
# RUN mv wordpress /var/www/html/wordpress
# RUN chmod  777 /var/www/html/wordpress
RUN mkdir /etc/nginx/ssl
COPY default /etc/nginx/sites-enabled/default
COPY nginx.crt nginx.key /etc/nginx/ssl/

ENTRYPOINT nginx -g 'daemon off;'


