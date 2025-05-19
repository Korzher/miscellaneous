CC = gcc
CFLAGS = -Wall -Wextra -Werror


all: graph

graph: graph.o pn.o input.o canvas.o
	$(CC) $^ -o ../build/graph  -lm

graph.o: graph.c
	$(CC) $(CFLAGS) -c $< -o $@

pn.o: pn.c pn.h
	$(CC) $(CFLAGS) -c $< -o $@

input.o: input.c input.h
	$(CC) $(CFLAGS) -c $< -o $@

canvas.o: canvas.c canvas.h
	$(CC) $(CFLAGS) -c $< -o $@

clean:
	rm -f *.o ../build/graph
