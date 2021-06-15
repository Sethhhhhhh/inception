FROM debian:buster

RUN apt-get update -y \
    && apt-get install nginx openssl -y \
	&& rm -rf /var/lib/apt/lists/*

WORKDIR /tmp

COPY ./conf/yviavant.conf /etc/nginx/conf.d/
COPY ./tools .

EXPOSE 443

CMD ["bash", "entrypoint.sh"]
