CONTAINERS = $(shell sudo docker ps -q)
IMAGES = $(shell sudo docker images -q)
VOLUMES = $(shell sudo docker volume ls -q)
SPACE =
all :
	mkdir -p /home/jeonhyun/data
	mkdir -p /home/jeonhyun/data/wp_db
	mkdir -p /home/jeonhyun/data/wp_site
	echo '127.0.0.1 jeonhyun.42.fr' | sudo tee --append /etc/hosts
	sudo docker-compose -f srcs/docker-compose.yml up
up :
	sudo docker-compose -f srcs/docker-compose.yml up
down :
	sudo docker-compose -f srcs/docker-compose.yml down

clean :
ifneq ($(CONTAINERS), $(SPACE))
	sudo docker rm -f $(CONTAINERS)
endif
ifneq ($(IMAGES), $(SPACE))
	sudo docker rmi -f $(IMAGES)
endif
ifneq ($(VOLUMES), $(SPACE))
	sudo docker volume rm $(VOLUMES)
endif
	sudo rm -rf /home/jeonhyun/data

.PHONY: all down clean
