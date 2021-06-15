FROM debian:buster

RUN apt-get update \
	&& apt-get install -y mariadb-server \
	&& rm -rf /var/lib/apt/lists/*

WORKDIR /tmp

COPY ./conf /etc/mysql/mariadb.conf.d/
COPY ./tools .

EXPOSE 3306

ENTRYPOINT ["bash", "entrypoint.sh"]
