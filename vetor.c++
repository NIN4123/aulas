#include <iostream>
using namespace std;

#define SIZE 5

int main() {
    int vetor[SIZE] = {2, 4, 6, 8, 10};
    //acessando e exibindo os elementos do vetor//
    cout << "Elementos do vetor: " <<endl;
    for (int i = 0; i < SIZE; i++) {
        cout << vetor[i] << " ";
    }
cout << endl;

return 0;
}