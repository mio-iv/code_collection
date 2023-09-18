#include <stdio.h>
 
void SelectionSort(int x[],int n)
{
  int i,j,max_id;
  int tmp;
  for(j=n-1;j>0;j--){
    max_id=0;
    for(i=1;i<=j;i++){
      if(x[max_id]<x[i])max_id=i;
    }
    tmp=x[j];
    x[j]=x[max_id];
    x[max_id]=tmp;
  }
  return;
}
 
 
void main()
{
  int i;
  int data[8]={3,2,8,5,7,1,6,4};
 
  printf("\n並べ替え前\n");
  for(i=0;i<8;i++)printf("%d\t",data[i]);
  printf("\n");
 
  SelectionSort(data,8);
 
  printf("\n並べ替え後\n");
  for(i=0;i<8;i++)printf("%d\t",data[i]);
  printf("\n");
 
  return;
}