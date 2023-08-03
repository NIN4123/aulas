#include <iostream>
int main() {
int numero;
std::cout << "digite um numero." << std::endl;
std::cin >> numero; 
for (int contador = 0; contador < numero; contador++) {
std::cout << contador << std::endl;
}
return 0;
}