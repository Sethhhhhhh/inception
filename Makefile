DOCKER_COMPOSE_FILE = ./srcs/docker-compose.yml

all:	up
up:
	mkdir -p /home/yviavant/data/wordpress
	mkdir -p /home/yviavant/data/mariadb
	docker-compose -f $(DOCKER_COMPOSE_FILE) up -d --build
down:
	docker-compose -f $(DOCKER_COMPOSE_FILE) down
start:
	docker-compose -f $(DOCKER_COMPOSE_FILE) start
stop:
	docker-compose -f $(DOCKER_COMPOSE_FILE) stop
ps:
	docker-compose -f $(DOCKER_COMPOSE_FILE) ps
rm: stop
	docker rm wordpress
	docker rm mariadb
	docker rm nginx
	docker volume rm srcs_wordpress
	docker volume rm srcs_mariadb

re: all

.PHONY: all up down start stop
	
