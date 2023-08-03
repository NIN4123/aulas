#include <iostream>

int main() {
    char operacao; 
    double num1, num2;
    
    std::cout << "Digite o primeiro número: ";
    std::cin >> num1; //usuário escolhe o primeiro número

    std::cout << "Digite o segundo número: ";
    std::cin >> num2; //usuário escolhe o segundo numero

    std::cout << num1 + num2 << std::endl; //os números serão automaticamente somados
    
    double resultado;

    return 0;
}
