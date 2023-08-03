#include <stdio.h>

int main() {
int numeros[5];

printf("Digite 5 números:\n");
for (int i = 0; i < 5; i++) {
scanf("%d", &numeros[i]);
}

printf("Elementos do array:\n");
for (int i = 0; i < 5; i++) {
printf("%d ", numeros[i]);
}
printf("\n");

return 0;
}