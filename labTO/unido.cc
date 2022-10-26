#include <assert.h>
#include <iostream>
using namespace std;
#define FACTOR 10
template<typename T>
class Stack{
    public:
        virtual void push(T) = 0;
        virtual void pop() = 0;
        virtual T top() = 0;
        virtual bool empty() = 0;   
};
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
    assert(!empty());
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
	cout<<"stack: ";
	for (int i = 0; i < sp - data; i++) {
    cout<< data[i]<<" ";
  }
	cout<<"\n";
}
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
