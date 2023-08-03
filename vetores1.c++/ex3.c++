#include <iostream>
using namespace std;

#define SIZE 10

int main() {
    int vetor[SIZE];
int soma = 0;
    // 
    cout << "Digite os valores para os elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << "Elemento " << i + 1 << ": ";
        cin >> vetor[i];
soma = vetor[i] + soma;
    }
cout << "soma: " << soma << endl;
    // acessando e exibindo os elementos do vetor
    cout << "Elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << vetor[i] << " ";
    }
    cout << endl;



    return 0;
}
