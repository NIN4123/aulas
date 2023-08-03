#include <iostream>
using namespace std;

int main() {
    int i, n;
    cout << "informe um número: " << endl;
    cin >> i >> n;
    long fat = 1;
    for (i = 1; i <= n; i++) {
        fat = fat * i;
    }
    cout << "O fatorial de " << n << " eh: " << fat << endl;
    return 0;
}