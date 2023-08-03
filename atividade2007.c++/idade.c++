#include <iostream>
int main() {
    int idade;
    std::cout << "digite sua idade: "; //usuário irá digitar sua idade
    std::cin >> idade; 

    if (idade >= 18) { //caso o número seja maior ou igual a 18, o usuário recebera a seguinte saída;
        std::cout << "Voce é maior de idade." << std::endl; 

        
    } else {
        std::cout << "voce é menor de idade." << std::endl; //caso contrário receberá isso;
    }

    return 0;
}
