NAME				= Inception

all:				${NAME}

${NAME}:
					docker-compose -f ./srcs/docker-compose.yml up -d
			
stop:		
					docker-compose -f ./srcs/docker-compose.yml stop

start:		
					docker-compose -f ./srcs/docker-compose.yml start

down:				
					docker-compose -f ./srcs/docker-compose.yml down

clean:				down
					@if [ -z "$$(docker images -qa)" ]; then \
						echo "Empty"; \
					else \
						echo "docker rmi -f "; \
						echo $$(docker images -qa); \
						docker rmi -f $$(docker images -qa);\
					fi
					
fclean: 			clean
					docker system prune -f
					

re: 				clean all

fre: 				fclean all

.PHONY: 			all stop start down clean fclean re fre