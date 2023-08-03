#include <iostream>
using namespace std;

#define SIZE 8

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

        if (vetor[i] % 2 == 0) {//dirá ao usuário se o número é par
        int numeroPar=vetor[i];
         std::cout << "o numero é par." << numeroPar<< std::endl;
         }
    }
cout << endl;

return 0;
}
