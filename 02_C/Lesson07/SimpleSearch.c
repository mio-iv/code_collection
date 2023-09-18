// 文字列関数の仕様

// 引数（入力）
// char text[ ] : 検索するテキストの文字配列
// char key[ ] : 検索するキーワードの文字配列

// 戻り値（出力）
// int : テキスト中のキーワード先頭と一致する位置の要素番号
// （一致する箇所がない場合 ‐1 ）

#include <stdio.h>
#include <string.h>
 
int SimpleSearch(char text[], char key[])
{
   int  i,j,n,m;
 
   m= strlen(key);
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
   char text[] = "She sells seashells.";
   char key[] = "sea";
   int  rc;
 
   printf("テキスト  ：%s\n",text);
   printf("キーワード：%s\n",key);
 
   rc = SimpleSearch(text,key);
 
   printf("検索結果  ：");
   if(rc!=-1){
      printf("キーワードは %d 文字目に検索されました\n",rc+1);
   }else{
      printf("キーワードは検索されませんでした\n");
   }
 
   return 0;
}