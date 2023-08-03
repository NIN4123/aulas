#include <iostream>
int main() {

    int a = 6;
    int b = 3;

    bool igual = (a == b); // igual = false
    bool diferente = (a != b); // diferente = true
    bool maior = (a > b); // maior = true
    bool menor = (a < b); // menor = false
    bool maiorOuIgual (a >= b); // maiorOuIgual = true
    bool menorOuIgual (a <= b); // menorOuIgual = false 

    std::cout << "igual: " << igual << std::endl;
    std::cout << "diferente: " << diferente << std::endl;
    std::cout << "maior: " << maior << std::endl;
    std::cout << "menor: " << menor << std::endl;
    std::cout << "maiorOuIgual: " << maiorOuIgual << std::endl;
    std::cout << "menorOuIgual: " << menorOuIgual << std::endl;

    return 0;
}
