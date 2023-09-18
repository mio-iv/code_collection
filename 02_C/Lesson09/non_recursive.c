//階乗計算プログラム（非再帰バージョン）
#include <stdio.h>
 
int fact(int n)
{
    int i,x=1;
    for(i=1;i<=n;i++){
        x= x*i;
    }
    return x;
}
 
int main(void)
{
    int n;
    printf("正の整数 n を入力："); scanf("%d",&n);
    printf("%d!=%d\n",n,fact(n));
    return 1;
}