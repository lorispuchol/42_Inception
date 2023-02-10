NAME				= Inception

all:				${NAME}

# changer la ligne mkdir pour debian
# enlever les tirets de docker-compose pour la vm
${NAME}:			
					mkdir -p	/Users/lorispuchol/data/wp_vol
					mkdir -p	/Users/lorispuchol/data/mariadb_vol
					docker-compose -f ./srcs/docker-compose.yml up -d
			
stop:		
					docker-compose -f ./srcs/docker-compose.yml stop

start:		
					docker-compose -f ./srcs/docker-compose.yml start

down:				
					docker-compose -f ./srcs/docker-compose.yml down

clean:				down
					@if [ -z "$$(docker images -qa)" ]; then \
						echo "No Images"; \
					else \
						echo "docker rmi -f "; \
						echo $$(docker images -qa); \
						docker rmi -f $$(docker images -qa);\
					fi
					@if [ -z "$$(docker volume ls -q)" ]; then \
						echo "No Volumes"; \
					else \
						echo "docker volume rm -f "; \
						echo $$(docker volume ls -q); \
						docker volume rm -f $$(docker volume ls -q);\
					fi

# changer la ligne rm pour debian
fclean: 			clean
					docker system prune -af
					rm -rf /Users/lorispuchol/data/*

re: 				clean all

fre: 				fclean all

.PHONY: 			all stop start down clean fclean re fre