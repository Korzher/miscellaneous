#include "pn.h"

int priority(char op) {
    if (op == 'u') return 5;
    if (op == '^') return 4;
    if (op == '*' || op == '/') return 3;
    return 2;
}

TokenList dijkstra(TokenList tokens) {
    TokenList output = {0};
    output.capacity = 16;
    output.data = malloc(output.capacity * sizeof(Token));

    Token stack[32];
    int top = -1;

    for (int i = tokens.size - 1; i >= 0; i--) {
        Token t = tokens.data[i];
        if (t.type == NUM || t.type == VAR) {
            tokenlist_push_front(&output, t);
        } else if (t.value[0] == ')') {
            stack[++top] = t;
        } else if (t.value[0] == '(') {
            while (top >= 0 && stack[top].value[0] != ')') {
                tokenlist_push_front(&output, stack[top--]);
            }
            top--;
        } else if (t.type == OP || t.type == FUNC) {
            while (top >= 0 && priority(stack[top].value[0]) > priority(t.value[0])) {
                tokenlist_push_front(&output, stack[top--]);
            }
            stack[++top] = t;
        }
    }

    while (top >= 0) tokenlist_push_front(&output, stack[top--]);
    return output;
}

double evaluate_prefix(TokenList pn, double x) {
    double stack[64] = {0};
    int top = -1;

    if (pn.size == 0) {
        printf("Empty expression\n");
        return 0.0;
    }

    for (int i = pn.size - 1; i >= 0; i--) {
        Token t = pn.data[i];
        if (t.type == NUM) {
            stack[++top] = atof(t.value);
        } else if (t.type == VAR) {
            stack[++top] = x;
        } else if (t.type == OP) {
            if (t.value[0] == 'u') {
                stack[top] = -stack[top];
                continue;
            }
            double a = stack[top--];
            double b = stack[top--];
            switch (t.value[0]) {
                case '+':
                    stack[++top] = a + b;
                    break;
                case '-':
                    stack[++top] = a - b;
                    break;
                case '*':
                    stack[++top] = a * b;
                    break;
                case '/':
                    stack[++top] = a / b;
                    break;
                case '^':
                    stack[++top] = pow(a, b);
                    break;
            }
        } else if (t.type == FUNC) {
            double a = stack[top--];
            if (strcmp(t.value, "sin") == 0)
                stack[++top] = sin(a);
            else if (strcmp(t.value, "cos") == 0)
                stack[++top] = cos(a);
            else if (strcmp(t.value, "tan") == 0)
                stack[++top] = tan(a);
            else if (strcmp(t.value, "ctg") == 0)
                stack[++top] = 1 / tan(a);
            else if (strcmp(t.value, "sqrt") == 0)
                stack[++top] = sqrt(a);
            else if (strcmp(t.value, "ln") == 0)
                stack[++top] = log(a);
        }

        if (top < 0) {
            printf("No result");
            return 0.0;
        }
    }
    return stack[top];
}

void tokenlist_push_front(TokenList* list, Token t) {
    if (list->size >= list->capacity) {
        list->capacity = list->capacity ? list->capacity * 2 : 16;
        Token* new_data = realloc(list->data, list->capacity * sizeof(Token));
        if (!new_data) exit(1);
        list->data = new_data;
    }
    memmove(list->data + 1, list->data, list->size * sizeof(Token));
    list->data[0] = t;
    list->size++;
}

#ifdef TEST
int main() {
    dijkstra(TokenList tokens);
    evaluate_prefix(TokenList pn, double x);
    return 0;
}
#endif
