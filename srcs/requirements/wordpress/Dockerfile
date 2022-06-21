FROM debian:buster

EXPOSE 9000

RUN apt-get update -y
RUN apt-get install wget -y
RUN apt-get install php-fpm -y
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz
