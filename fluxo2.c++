#include <iostream>

int main() {
while (true) {
    cout << "Menu\n";
    cout << "1. Adicionar item\n2. Remover item\n3. Visualizar item\n4. Sair";
    cin >> escolha; 
switch (opcao) {
        case 1:
           std::cout << "Adicionar item." 
           break;
        case 2: 
           std::cout << "Remover item." 
           break;
        case 3:
           std::cout << "Visualizar lista." 
           break:
        case 4: 
           std::cout << "Sair."
           break;
        default:
           std::cout << "opcao invalida."
    }
}
    return 0;
}