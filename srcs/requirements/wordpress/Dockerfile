FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt install php-fpm php-common php-mbstring php-xmlrpc php-soap php-gd php-xml php-intl php-mysql php-cli php-zip php-curl -y
RUN mkdir /run/php/
COPY wordpress /var/www/html/wordpress
RUN chmod  777 /var/www/html/wordpress
COPY www.conf /etc/php/7.3/fpm/pool.d/
COPY setup.sh /

ENTRYPOINT sh /setup.sh


