#! /bin/bash

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

sed -i "s/TO_REPLACE_USER/$DB_USER/g" wordpress.sql
sed -i "s/TO_REPLACE_PASSWORD/$DB_PASSWORD/g" wordpress.sql

service mysql start

RESULT=`mysqlshow -u root  wordpress | grep -v Wildcard | grep -o wordpress`
if [ "$RESULT" != "wordpress" ]; then
	mysql -u root < wordpress.sql
fi

mysqld
