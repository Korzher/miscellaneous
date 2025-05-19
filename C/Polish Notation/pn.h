#ifndef PN_H
#define PN_H

#include <math.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define NUM 0
#define VAR 1
#define OP 2
#define FUNC 3
#define PAREN 4

typedef struct {
    int type;
    char value[16];
} Token;

typedef struct {
    Token* data;
    int size;
    int capacity;
} TokenList;

TokenList dijkstra(TokenList tokens);
double evaluate_prefix(TokenList pn, double x);
void tokenlist_push_front(TokenList* list, Token t);

#endif
