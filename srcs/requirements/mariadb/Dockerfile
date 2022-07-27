FROM debian:buster

EXPOSE 3306

RUN apt-get update -y
RUN apt-get install mariadb-server -y
RUN apt-get install vim -y

COPY ./conf/my.cnf /etc/mysql/my.cnf
COPY ./tools/setting.sh var/.
COPY ./tools/wordpress.sql var/.

ENTRYPOINT ["sh", "/var/setting.sh" ]
