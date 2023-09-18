//march_simplesearch

#include <stdio.h>
#include <string.h>
 
int SimpleSearch(char text[],char key[])
{
   int i,j,m,n;
 
  m = strlen(key);
  n = strlen(text);
 
  for(i=0;i<=n-m;i++){
    for(j=0;j<m;j++){
      if(text[i+j] != key[j]) break;
    }
    if(j==m) return i;
  }
  return -1;
}
 
int main()
{
  char Text[64]="She sells seashells by the seashore.";
  char Key[64];
  int rc,i,m,s;
 
  printf("テキスト  ：%s\n",Text);
  printf("キーワード："); scanf("%s",Key);
 
  m=strlen(Key);
  s=0;
  while(1){
    rc = SimpleSearch(Text+s,Key);
    printf("検索結果  ：");
    if(rc!=-1){
      printf("キーワードは %d 文字目に検索されました\n",s+rc+1);
      s=s+rc+m;
    }else{
      printf("キーワードは検索されませんでした\n");
      break;
    }
  }
  return 0;
}