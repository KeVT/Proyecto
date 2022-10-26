#ifndef ARRAY_STACK_H
#define ARRAY_STACK_H
#include "stack.h"
#include "arrayStack.cc"
#define FACTOR 10

template<typename T>
class ArrayStack : public Stack<T>{
    private:
        T *data;
        int size;
        T *sp;
        void resize();
    public:
        ArrayStack(int s) : size{s}, data{new T[size]}, sp{data}{};
        ~ArrayStack(){delete[] data;}
        void push(T);
        void pop();
        T top();
        bool empty(); 
        void print();
};
#endif
