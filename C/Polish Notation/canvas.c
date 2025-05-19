#include "canvas.h"

#include <string.h>

char** create_canvas() {
    char** canvas = malloc(25 * sizeof(char*));
    for (int i = 0; i < 25; i++) {
        canvas[i] = malloc(80 * sizeof(char));
        memset(canvas[i], '.', 80);
    }
    return canvas;
}

void draw_on_canvas(char** canvas, const TokenList* pn, double x_max) {
    printf("\033c");
    for (int x = 0; x < 80; x++) {
        double xi = x * x_max / 79.0;
        double y = evaluate_prefix(*pn, xi);
        int yi = (int)((y + 1) * 12.0);
        if (yi >= 0 && yi < 25) canvas[yi][x] = '*';
    }
}

void print_canvas(char** canvas) {
    for (int i = 0; i < 25; i++) {
        printf("%.80s\n", canvas[i]);
    }
}

void free_canvas(char** canvas) {
    for (int i = 0; i < 25; i++) free(canvas[i]);
    free(canvas);
}

#ifdef TEST
int main() {
    canvas = create_canvas();
    draw_on_canvas(char** canvas, const TokenList* pn, double x_max);
    print_canvas(char** canvas);
    free_canvas(char** canvas);
    return 0;
}
#endif
