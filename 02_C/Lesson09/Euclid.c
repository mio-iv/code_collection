// ユークリッドの互除法による最大公約数計算プログラム
#include <stdio.h>
 
int GCD( int A, int B)
{
  if(B==0) return A;
  return GCD(B, A%B);
}
 
int main()
{
  int a,b;
  printf("値1："); scanf("%d",&a);
  printf("値2："); scanf("%d",&b);
  printf("%d と %d の最大公約数は %d です\n",a,b,GCD(a,b));
  return 0;
}