#include <iostream>
using namespace std;

#define SIZE 7

int main() {
    int vetor[SIZE];

    // perguntando ao usuário o valor desejado
    cout << "Digite os valores para os elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << "Elemento " << i + 1 << ": ";
        cin >> vetor[i];
    }
    // acessandofor e exibindo os elementos do vetor
   
    cout << "Elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << vetor[i] << " ";
    }
cout << endl;


return 0;

}
