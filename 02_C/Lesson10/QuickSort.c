//クイックソート：分割処理を再帰的に行う
#include <stdio.h>
 
void QuickSort(int x[], int min, int max )
{
    int p,i,j,tmp;
 
    if(min>=max) return;
 
    p=( x[min]+x[max] )/2;  //ピボットpを決める（ x[min] と x[max] の平均 ）
    i=min; j=max;           //要素番号を i=min、j=max と初期化
    while(1){
        while(x[i]<p) i++;      //ピボット以上の値 x[i] を見つける
        while(x[j]>p) j--;      //ピボット以下の値 x[j] を見つける
        if(i>=j) break;
        tmp=x[i]; x[i]=x[j]; x[j]=tmp;  // x[i] と x[j] の値を交換
        i++; j--;               //iを1増やしjを1減らし再び繰り返す
    }
 
    QuickSort(x,min,i-1);
    QuickSort(x,j+1,max);
 
    return;
}
 
void main()
{
    int i;
    int data[8]={30,20,80,50,70,10,60,40};
 
    printf("\n並べ替え前\n");
    for(i=0;i<8;i++)printf("%d\t",data[i]);
    printf("\n");
 
    QuickSort(data,0,7);
 
    printf("\n並べ替え後\n");
    for(i=0;i<8;i++)printf("%d\t",data[i]);
    printf("\n");
 
    return;
}