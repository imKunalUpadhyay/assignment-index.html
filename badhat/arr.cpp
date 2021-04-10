#include<iostream>
using namespace std;

int main()
{
	int arr[]={23,233,32};
	cout<<arr[1]<<endl;

arr[2]=334;


cout<<arr[2]<<endl;
for (int i = 0; i < 3; ++i)
{
	cout<<arr[i]<<endl;
}

int* p=arr;
cout<< *p <<endl;
cout<<*(p+1)<<endl;
}