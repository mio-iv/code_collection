#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#define N 100

int COMPARE_COUNT;
int SWAP_COUNT;

void GenerateRandomData(int range, int data[], int num){
    int i;
    srand(time(NULL));
    for(i=0;i<num;i++){
        data[i]=rand()%range+1;
        //printf("%d\t",Data[i]);
    }
    printf("\n");
    return;
}

void BublleSort(int x[], int n){
    //バブルソート
    int i,j,tmp;
    for(j=n-1;j>0;j--){
        //全体のカウンタ
    	for(i=0;i<j;i++){
            //内部カウンタ
        	if(x[i]>x[i+1]){
                //前後で比較。
            	tmp=x[i];
                x[i]=x[i+1];
                x[i+1]=tmp;
                SWAP_COUNT++;
            }
            COMPARE_COUNT++;
        }
    }
    return;
}


void CombSort(int x[], int n){
    int i,j,tmp,gap,flg=1;
    gap=n;
    
    while(gap >1 || flg==1){
    //gapが1以上、もしくはflgが1(並び換え発生あり）の間続ける。
        gap = gap*10/13;	//1.3週縮率
        if(gap<1) gap=1;	//1以下のときは1
        flg=0;
        //for(i=0; i+gap<n; i++){
        for(i=0; i<n-gap; i++){
        	if(x[i]>x[i+gap]){
            	tmp=x[i];
            	x[i]=x[i+gap];
                x[i+gap]=tmp;
                flg=1;
                SWAP_COUNT++;
            }
            COMPARE_COUNT++;
        }
    }
    return;
}


void main(){
    int i;
    int data1[N];
    int data2[N];

    GenerateRandomData(N, data1, N);    //ランダムデータの生成
    for(i=0;i<N;i++)data2[i]=data1[i];  //移し替え
    
    //出力
    printf("要素数：%d\n",N);

    printf("\n=バブルソート=\n");
    COMPARE_COUNT = SWAP_COUNT = 0; //こんな書き方できるのか！初期化
    BublleSort(data1, N);
    printf("\n");
    printf("比較:%d回、交換:%d回\n",COMPARE_COUNT,SWAP_COUNT);
    
    printf("\n=コムソート=\n");
    COMPARE_COUNT = SWAP_COUNT = 0;
    
    // printf("\n並べ替え前\n");
    // for(i=0;i<N;i++)printf("%d\t",data2[i]);
    // printf("\n");

    CombSort(data2, N);

    // printf("\n並べ替え後\n");
    // for(i=0;i<N;i++)printf("%d\t",data2[i]);
    // printf("\n");
    
    printf("\n");
    printf("比較:%d回、交換:%d回\n",COMPARE_COUNT,SWAP_COUNT);
    
}

