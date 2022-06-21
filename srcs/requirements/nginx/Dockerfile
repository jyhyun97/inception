FROM debian:buster

EXPOSE 443

RUN apt-get update -y
RUN apt-get install nginx -y
RUN apt-get install vim -y
RUN apt-get install openssl -y

RUN openssl genrsa -out cert.key 2048
RUN openssl req -new -key cert.key -out cert.csr -subj "/C=KR/ST=Seoul/L=Gaepo/O=42Seoul/OU=Gam/CN=jeonhyun@student.42seoul.kr"
RUN openssl req -x509 -days 365 -in cert.csr -key cert.key -out cert.crt

RUN mkdir /etc/nginx/ssl
RUN mv cert.key /etc/nginx/ssl/
RUN mv cert.crt /etc/nginx/ssl/
COPY conf/default /etc/nginx/sites-available/default
