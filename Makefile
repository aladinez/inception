NAME = inception
SRC = ./srcs/docker-compose.yml
VOL = ${HOME}/data
all : ${NAME}

${NAME}:
	grep -qxF "127.0.1.1       aez-zaou.42.fr" /etc/hosts || echo "127.0.1.1       aez-zaou.42.fr" >> /etc/hosts
	# mkdir -p ${VOL}/wordpress
	# mkdir -p ${VOL}/mariadb
	# docker-compose -f ${SRC} up --build -d
re : fclean all
clean :
	docker-compose -f ${SRC} down
fclean :
	docker-compose -f ${SRC} down --rmi all
	docker volume ls -q | xargs docker volume rm 