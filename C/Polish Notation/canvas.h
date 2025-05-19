#ifndef CANVAS_H
#define CANVAS_H

#include "pn.h"

char** create_canvas();
void draw_on_canvas(char** canvas, const TokenList* pn, double x_max);
void print_canvas(char** canvas);
void free_canvas(char** canvas);

#endif
