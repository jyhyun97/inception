FROM debian:buster

EXPOSE 3306

RUN apt-get update -y
RUN apt-get install mariadb-server -y
RUN apt-get install vim -y

#COPY ./conf/50-server.cnf var/.
COPY ./conf/my.cnf /etc/mysql/my.cnf
COPY ./tools/setting.sh var/.
#COPY ./tools/example.sql var/.

# RUN mv -f /var/50-server.cnf /etc/mysql/mariadb.conf.d/
ENTRYPOINT ["sh", "/var/setting.sh" ]