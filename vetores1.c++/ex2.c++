#include <iostream>
#include <string>
using namespace std;

#define SIZE 5

int main() {
    string frutas[SIZE];

    // pedindo ao usuário o nome dos valores
    cout << "Digite nomes de frutas para os elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << "Elemento " << i + 1 << ": ";
        cin >> frutas[i];
    }

    // acessando e exibindo os elementos dos vetores
    cout << "Elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << frutas[i] << " ";
    }
    cout << endl;

    return 0;
}
