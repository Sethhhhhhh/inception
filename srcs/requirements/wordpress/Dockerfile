FROM debian:buster

RUN apt-get update \
	&& apt-get install -y php-cgi \
	php-common \
	php-fpm \
	php-pear \
	php-mbstring \
	php-zip \
	php-net-socket \
	php-gd \
	php-xml-util \
	php-gettext \
	php-mysql \
	php-bcmath \
	wget \
	&& rm -rf /var/lib/apt/lists/*

WORKDIR tmp

COPY /conf/wp-config.php .
COPY /tools .

ENTRYPOINT ["bash", "entrypoint.sh"]

EXPOSE 9000
