FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install wget -y
RUN apt install php-fpm php-common php-mbstring php-xmlrpc php-soap php-gd php-xml php-intl php-mysql php-cli php-zip php-curl -y
RUN mkdir /run/php/
VOLUME /var/www/html
# # WORKDIR /var/www/html
# RUN wget https://wordpress.org/latest.tar.gz
# RUN tar -zxvf latest.tar.gz
# RUN rm latest.tar.gz
COPY wordpress /var/www/html/wordpress
COPY wp-config.php /var/www/html/wordpress
RUN chmod  777 /var/www/html/wordpress
# RUN chown -R www-data:www-data /var/www/html/wordpress

COPY www.conf /etc/php/7.3/fpm/pool.d/
COPY setup.sh /

ENTRYPOINT sh setup.sh


