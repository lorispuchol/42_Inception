NAME		=	easyfind

INC			=	easyfind.hpp \

SRCS 		=	main.cpp \

OBJS 		=	${addprefix objs/, ${SRCS:.cpp=.o}}

CC 			=	c++
CFLAGS 		=	-Wall -Werror -Wextra -std=c++98
RM 			=	rm -rf

objs/%.o: 	%.cpp ${INC} Makefile
			@mkdir -p $(dir $@)
			$(CC) ${CFLAGS} -c $< -o $@

all:		 ${NAME}

${NAME}: 	${OBJS} ${INC}
			$(CC) ${CFLAGS} -o $(NAME) ${OBJS}

clean:
			${RM} objs/

fclean: 	clean
			${RM} ${NAME}

re: 		fclean all

.PHONY: 	all clean fclean re