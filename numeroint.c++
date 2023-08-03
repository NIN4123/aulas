#include <iostream>
int main() {

int numero; 

std::cout << "numero inteiro: ";
std::cin >> numero;
int resultado = numero * 2;
std::cout << "o dobro do numero é:^" << resultado << std::endl;

return 0;
}