#include <iostream>
int main() {
    int numero;
    std::cout << "digite um numero: ";
    std::cin >> numero; 

    if (numero % 2 == 0) {
        std::cout << "o numero é par." << std::endl;

        
    } else {
        std::cout << "o numero é ímpar." << std::endl;
    }

    return 0;
}