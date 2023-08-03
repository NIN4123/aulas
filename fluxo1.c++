#include <iostream>
using namespace std;

int main() {
    double num1, num2;
    char operacao;

    cout << "Digite o primeiro número: ";
    cin >> num1;

    cout << "Digite a operação (+, -, *, /): ";
    cin >> operacao;

    cout << "Digite o segundo número: ";
    cin >> num2;

    double resultado;

    switch (operacao) {
        case '+':
            resultado = num1 + num2;
            cout << "Resultado: " << resultado << endl;
            break;
        case '-':
            resultado = num1 - num2;
            cout << "Resultado: " << resultado << endl;
            break;
        case '*':
            resultado = num1 * num2;
            cout << "Resultado: " << resultado << endl;
            break;
        case '/':
            if (num2 != 0) {
                resultado = num1 / num2;
                cout << "Resultado: " << resultado << endl;
            } else {
                cout << "Erro: divisão por zero." << endl;
            }
            break;
        default:
            cout << "Operação inválida." << endl;
    }

    return 0;
}
