//Emphasis

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
  char Text[]="She sells seashells by the seashore.";
  char Key[64];
  int rc,i,m,s;
 
  printf("テキスト  ：%s\n",Text);
  printf("キーワード："); scanf("%s",Key);
 
  m=strlen(Key);
 
  printf("検索結果  ：");
  s=0;
  while(1){
    rc = SimpleSearch(Text+s,Key);
    if(rc!=-1){
      for(i=s;i<s+rc;i++) printf("%c",Text[i]);
      printf("\e[7m"); //反転表示
      for(i=s+rc;i<s+rc+m;i++) printf("%c",Text[i]);
      printf("\e[0m"); //表示リセット
      s=s+rc+m;
    }else{
      printf("%s\n",Text+s);
      break;
    }
  }
  return 0;
}

// 37,39 行目でディスプレイに出力している、 
// \e[●m は 表示属性を指定するためのエスケープシーケンスで 
// ●の部分に入る数値のコードで動作が変わります。
// 以下に、演習環境で動作する ●の部分のコードと意味を書いておきます。

// 0: リセット 4:下線 7:反転 8:非表示 
// 30～37:文字色 [ 30:黒(濃グレー) 31:赤 32:緑 33:黄 34:青 35:マゼンダ 36:シアン 37:白(薄グレー）] 
// 40～47:背景色 [ 文字色に準じる ]