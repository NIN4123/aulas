#include <iostream>
using namespace std;

#define SIZE 6

int main() {
    int vetor[SIZE];
int inversor;

    // perguntando ao usuário o valor desejado
    cout << "Digite os valores para os elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << "Elemento " << i + 1 << ": ";
        cin >> vetor[i];
    }
    cout << endl;

    // acessandofor e exibindo os elementos do vetor
   
    cout << "Elementos do vetor: " << endl;
    for (int i = 0; i < SIZE; i++) {
        cout << vetor[i] << " ";
    }
    cout << endl;

cout << "Vetor invertido: ";

for(int i = 0; i <(SIZE/2); i++){

inversor = vetor[i];
vetor[i] = vetor[(SIZE-1)-i];
vetor[(SIZE-1)-i] = inversor;

}
 for (int i = 0; i < SIZE; i++) {
        cout << vetor[i] << " ";
    }
    cout << endl;
    return 0;

}
