#include <iostream>
#include <string>

int main () {
    std::string nome;
    nome="barbie";
    std::string sobrenome = "girl";
    std::string nomeCompleto = nome + " " + sobrenome;
    std::cout << "nome completo: " << nomeCompleto << std::endl;
    return 0;
}