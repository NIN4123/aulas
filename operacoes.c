#include <stdio.h>

int soma(int numero1, int numero2) {
    int resultado = numero1 + numero2;
    return resultado;
}

int subtracao(int numero1, int numero2) {
    int resultado = numero1 - numero2;
    return resultado;
}

int multiplicacao(int numero1, int numero2) {
    int resultado = numero1 * numero2;
    return resultado;
}

int main() {
    int numero1, numero2;
    printf("Digite o primeiro numero: ");
    scanf("%d", &numero1);
    printf("Digite o segundo numero: ");
    scanf("%d", &numero2);
    
    int resultadoSoma = soma(numero1, numero2);
    int resultadoSubtracao = subtracao(numero1, numero2);
    int resultadoMultiplicacao = multiplicacao(numero1, numero2);
    
    printf("Soma: %d\n", resultadoSoma);
    printf("Subtracao: %d\n", resultadoSubtracao);
    printf("Multiplicacao: %d\n", resultadoMultiplicacao);
    
    return 0;
}
