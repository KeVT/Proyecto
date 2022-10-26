#include <assert.h>
#include "arrayStack.h"
#include <iostream>
using namespace std;

template <typename T>
void ArrayStack<T>::push(T e){
    int numElem = sp - data;
    if(size == numElem) //assert(size==numElem)  si es que no hubiera el método resize.
        resize();
    *sp = e;
    sp++;
}
template<typename T>
void ArrayStack<T>::pop(){
    assert(!empty));
    if(empty())
        return;
    sp--;
  /* T *newData = new T[size];
    int s=sp - data;
    for (int i = 0; i < s; i++) {
       newData[i] = data[i];
    }
  sp = newData+s;
  delete[] data;
 // sp++;
  data = newData;*/
}
template<typename T>
T ArrayStack<T>::top(){
    //TODO caso de error especial por implementar
    assert(!empty());
    return *(sp-1);
}
template<typename T>
bool ArrayStack<T>::empty(){
    assert(sp >= data);
    return sp == data;
}
template<typename T>
void ArrayStack<T>::resize(){
    assert(FACTOR>0);
    T *newData = new T[size + FACTOR];
    for (int i=0; i<size; i++)
        newData[i] = data[i];
    sp = newData + size;
    size += FACTOR;
    delete[] data;
    data = newData;
}
template <typename T>
void ArrayStack<T>::print(){
	std::cout<<"stack: ";
	for (int i = 0; i < sp - data; i++) {
    cout<< data[i]<<" ";
  }
	cout<<"\n";
}
