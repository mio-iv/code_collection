#include <stdio.h>
#define N 8

void BublleSort(int x[], int n){
    //参照渡し？
    int i,j,tmp;	//繰り返し用インデックスと一時置き場
    for(j=n-1;j>0;j--){
        //全体のカウンタ
    	for(i=0;i<j;i++){
            //内部カウンタ
        	if(x[i]>x[i+1]){
                //前後で比較。
            	tmp=x[i];
                x[i]=x[i+1];
                x[i+1]=tmp;
            }
        }
    }
    return;
}


void main(){
    int i;
    int data[N]={3,2,8,5,7,1,6,4};
    
    printf("\n並べ替え前\n");
    for(i=0;i<N;i++)printf("%d\t",data[i]);
    printf("\n");

    BublleSort(data,N);
    
    printf("\n並べ替え後\n");
    for(i=0;i<N;i++)printf("%d\t",data[i]);
    printf("\n");

    return;
    
}




