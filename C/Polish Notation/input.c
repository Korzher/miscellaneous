#include "input.h"

char* input() {
    char* buffer = NULL;
    size_t size = 0;
    ssize_t len = getline(&buffer, &size, stdin);
    if (len <= 0) return NULL;
    buffer[len - 1] = '\0';
    return buffer;
}

TokenList parse(const char* expr) {
    TokenList tokens = {0};
    const char* p = expr;
    tokens.capacity = 16;
    tokens.data = malloc(tokens.capacity * sizeof(Token));

    while (*p) {
        if (*p == ' ') {
            p++;
            continue;
        }

        if (tokens.size >= tokens.capacity) {
            tokens.capacity *= 2;
            Token* new_data = realloc(tokens.data, tokens.capacity * sizeof(Token));
            if (!new_data) exit(1);
            tokens.data = new_data;
        }

        if ((*p >= '0' && *p <= '9') || *p == '.') {
            int i = 0;
            while ((*p >= '0' && *p <= '9') || *p == '.') tokens.data[tokens.size].value[i++] = *p++;
            tokens.data[tokens.size++].type = NUM;
            continue;
        }

        if (*p >= 'a' && *p <= 'z') {
            int i = 0;
            while ((*p >= 'a' && *p <= 'z')) tokens.data[tokens.size].value[i++] = *p++;
            if (strcmp(tokens.data[tokens.size].value, "x") == 0) {
                tokens.data[tokens.size].type = VAR;
            } else if (is_func(tokens.data[tokens.size].value)) {
                tokens.data[tokens.size].type = FUNC;
            }
            tokens.size++;
            continue;
        }

        if (strchr("+-*/^()", *p)) {
            if (*p == '-' && (tokens.size == 0 || tokens.data[tokens.size - 1].type == OP ||
                              tokens.data[tokens.size - 1].type == PAREN)) {
                tokens.data[tokens.size] = (Token){OP, "u"};
            } else {
                tokens.data[tokens.size] = (Token){*p == '(' || *p == ')' ? PAREN : OP, {*p, 0}};
            }
            tokens.size++;
            p++;
        }
    }
    return tokens;
}

void tokenlist_free(TokenList* list) {
    free(list->data);
    list->data = NULL;
    list->size = list->capacity = 0;
}

int is_func(const char* s) {
    const char* funcs[] = {"sin", "cos", "tan", "ctg", "sqrt", "ln", NULL};
    for (int i = 0; funcs[i]; i++)
        if (strcmp(s, funcs[i]) == 0) return 1;
    return 0;
}

#ifdef TEST
int main() {
    input();
    parse(const char* expr);
    tokenlist_free(TokenList * list);
    func = is_func(const char* s);
    return 0;
}
#endif
