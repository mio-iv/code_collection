// 非再帰アルゴリズムによる最大公約数計算プログラム
#include <stdio.h>
 
int GCD_no_rec( int A, int B)
{
    int i,i0;
     
    if(A<B) i0=A;
    else i0=B;
     
    for(i=i0;i>=1;i--){
        if((A%i==0)&&(B%i==0)) return i;
    }
}
 
int main()
{
  int a,b;
  printf("値1："); scanf("%d",&a);
  printf("値2："); scanf("%d",&b);
  printf("%d と %d の最大公約数は %d です\n",a,b,GCD_no_rec(a,b));
  return 0;
}