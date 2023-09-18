#include <stdio.h>
#include <string.h>
int COUNT=0;
 
int SimpleSearch( char text[ ], char key[ ])
{
  int i,j,m,n;
 
  n = strlen(text);
  m = strlen(key);
 
  for(i=0;i<=n-m;i++){
    for(j=0;j<m;j++){
      COUNT++;
      if(text[i+j] != key[j]) break;
    }
    if(j==m) return i;
  }
  return -1;
}
 
int BMSearch(unsigned char text[], unsigned char key[])
{
  int table[256];
  int nt,nk,i,t,k;
 
  nt = strlen(text);
  nk = strlen(key);
 
  //スキップ表の作成
  for(i=0;i<256;i++) table[i]=nk;   
  for(i=0;i<nk;i++) table[key[i]]=nk-i-1;
 
  //検索開始
  t = k = nk-1;
  while(t<nt){
    COUNT++;
    if(text[t]==key[k]){
      if(k==0) return t;
      t--; k--; 
    }else{
      if(table[text[t]] <= nk-1-k) t = t+nk-k;
      else t = t + table[text[t]];
      k = nk-1;
    }
  }
  return(-1);
}
int main()
{
  char text[]="She sells seashells by the seashore.";
  char key[64];
  int rc;
 
  printf("テキスト  ：%s\n",text);
  printf("キーワード："); scanf("%s",key);
 
  printf("\n=単純検索法＝\n");
  COUNT=0;
  rc = SimpleSearch(text,key);
  printf("比較回数  ：%d 回\n",COUNT);
  printf("検索結果  ：");
  if(rc!=-1){
    printf("キーワードは %d 文字目に検索されました\n",rc+1);
  }else{
    printf("キーワードは検索されませんでした\n");
  }
 
  printf("\n=ボイヤー・ムーア法＝\n");
  COUNT=0;
  rc = BMSearch(text,key);
  printf("比較回数  ：%d 回\n",COUNT);
  printf("検索結果  ：");
  if(rc!=-1){
    printf("キーワードは %d 文字目に検索されました\n",rc+1);
  }else{
    printf("キーワードは検索されませんでした\n");
  }
 
  return 0;
}