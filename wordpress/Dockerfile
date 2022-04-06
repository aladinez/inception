FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y
# RUN apt-get install nginx wget -y
RUN apt install php-fpm php-common php-mbstring php-xmlrpc php-soap php-gd php-xml php-intl php-mysql php-cli php-zip php-curl -y
RUN mkdir /run/php/
#RUN wget https://wordpress.org/latest.tar.gz
#RUN tar -zxvf latest.tar.gz
#RUN mv wordpress /var/www/html/wordpress
VOLUME /var/www/html
COPY wordpress /var/www/html/wordpress
COPY wp-config.php /var/www/html/wordpress
RUN chmod  777 /var/www/html/wordpress
RUN chown -R www-data:www-data /var/www/html/wordpress
# RUN mkdir /etc/nginx/ssl
# COPY default /etc/nginx/sites-enabled/default
# COPY nginx.crt nginx.key /etc/nginx/ssl/
COPY www.conf /etc/php/7.3/fpm/pool.d/
COPY setup.sh /

ENTRYPOINT /usr/sbin/php-fpm7.3 -F


