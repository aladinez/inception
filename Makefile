NAME = inception
SRC = ./srcs/docker-compose.yml
VOL = ${HOME}/data
all : ${NAME}

${NAME}:
	mkdir -p ${VOL}/wordpress
	mkdir -p ${VOL}/mariadb
	docker-compose -f ${SRC} up --build 
re : fclean all
clean :
	docker-compose -f ${SRC} down
fclean :
	docker-compose -f ${SRC} down --rmi all
	docker volume ls -q | xargs docker volume rm 