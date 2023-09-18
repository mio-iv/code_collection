//階乗計算プログラム（再帰バージョン）
#include <stdio.h>
 
int fact(int n)
{
    printf("n のアドレス：%p \n",&n);
    if(n==1) return 1;
    return (n * fact(n-1));
}
 
int main(void)
{
    int n;
    printf("正の整数 n を入力："); scanf("%d",&n);
    if(n>0) printf("%d! = %d \n",n,fact(n));
    return 1;
}