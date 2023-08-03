#include <iostream>

int main() {
    int idade;
    
    std::cout << "digite sua idade: ";
    std::cin >> idade;

    if (idade >= 18) {
    std::cout << "voce e maior de idade." << std::endl;
    } else {
        std::cout << "voce e menor de idade." << std::endl;
    }
    return 0;

}