#! /bin/bash

if [ -z "$DB_NAME" ]
then
	>&2 echo "$DB_NAME value not found, abort"
	exit 1
fi
if [ -z "$DB_HOST" ]
then
	>&2 echo "$DB_HOST value not found, abort"
	exit 1
fi
if [ -z "$DB_USER" ]
then
	>&2 echo "$DB_USER value not found, abort"
	exit 1
fi

if [ -z "$DB_PASSWORD" ]
then
	>&2 echo "$DB_PASSWORD value not found, abort"
	exit 1
fi

sed -i "s/TO_REPLACE_DB_USER/$DB_USER/g" wp-config.php
sed -i "s/TO_REPLACE_DB_PASSWORD/$DB_PASSWORD/g" wp-config.php
sed -i "s/TO_REPLACE_DB_HOST/$DB_HOST/g" wp-config.php
sed -i "s/TO_REPLACE_DB_NAME/$DB_NAME/g" wp-config.php

mkdir -p /run/php

wget https://fr.wordpress.org/wordpress-5.3-fr_FR.tar.gz
tar xvf wordpress-5.3-fr_FR.tar.gz

echo "listen = 0.0.0.0:9000" >> /etc/php/7.3/fpm/pool.d/www.conf

if [ ! -d "/var/www/wordpress" ]; 
then 
	cp -r wordpress /var/www/;
fi
cp wp-config.php /var/www/wordpress/

php-fpm7.3 -F

