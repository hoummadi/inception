include ./srcs/.env
COMMAND = cd srcs && sudo docker-compose -f docker-compose.yml

all:
	sudo chmod 777 /etc/hosts
	sudo echo "127.0.0.1" ${DOMAINE_NAME} >> /etc/hosts
	sudo mkdir -p /home/hhoummad/data/database
	sudo mkdir -p /home/hhoummad/data/files
	sudo mkdir -p /home/hhoummad/data/portainer_vol
	${COMMAND} up -d --build

build:
	${COMMAND} up -d --build

up:
	${COMMAND} up -d
start:
	${COMMAND} start
stop:
	${COMMAND} stop
down:
	${COMMAND} down

clean: down
	sudo sh ./srcs/requirements/tools/rm_images.sh
	sudo rm -rf /home/hhoummad/data/database/*
	sudo rm -rf /home/hhoummad/data/files/*
	sudo rm -rf /home/hhoummad/data/portainer_vol/*

fclean: clean
	sudo rm -rf /home/hhoummad/data/database
	sudo rm -rf /home/hhoummad/data/files
	sudo rm -rf /home/hhoummad/data/portainer_vol