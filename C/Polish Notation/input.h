#ifndef INPUT_H
#define INPUT_H

#include <stdio.h>
#include <stdlib.h>

#include "pn.h"

char* input();
TokenList parse(const char* expr);
void tokenlist_free(TokenList* list);
int is_func(const char* s);

#endif
