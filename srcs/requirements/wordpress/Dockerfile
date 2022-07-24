FROM debian:buster

EXPOSE 9000

RUN apt-get update -y
RUN apt-get install wget -y
RUN apt-get install php -y
RUN apt-get install php-mysql -y
RUN apt-get install php-fpm -y
RUN apt-get install mariadb-client -y

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz

RUN mv -f /wordpress /var/www/
RUN	chown -R www-data:www-data /var/www/wordpress

RUN rm -rf /var/www/wordpress/wp-config-sample.php
COPY ./conf/wp-config.php /var/www/wordpress/
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN mkdir /run/php/

ENTRYPOINT ["php-fpm7.3", "-F", "-R"]
