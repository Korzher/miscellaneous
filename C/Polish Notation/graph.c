#include <stdio.h>

#include "canvas.h"
#include "input.h"
#include "pn.h"

#define X_MAX (4 * M_PI)

int main() {
    char* expr = input();
    if (!expr) return 1;

    TokenList tokens = parse(expr);
    TokenList pn = dijkstra(tokens);

    char** canvas = create_canvas();
    draw_on_canvas(canvas, &pn, X_MAX);
    print_canvas(canvas);

    free_canvas(canvas);
    free(expr);
    tokenlist_free(&tokens);
    tokenlist_free(&pn);
    return 0;
}
