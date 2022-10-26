#include <iostream>
#include "arrayStack.h"

int main(){
    ArrayStack<int> a(4);
    a.push(5);
    a.push(1);
    a.print();
    a.push(15);
    a.print();
    cout<<a.top()<<"\n";
    a.pop();
    a.print();
    return 0;
}
