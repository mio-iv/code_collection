// カッコのチェックをするプログラム
#include <stdio.h>
 
#define SMALL  1
#define MEDIUM 2
#define LARGE  3
 
#define OK    0
#define ERROR 1
 
#define MAX_NUM 10
int stack[MAX_NUM];
int num;
 
void push(int data)
{
   if(num==MAX_NUM){
      printf("これ以上、スタックに積めません\n");
      return;
   }
   stack[num]=data;
   num++;
   return;
}
 
int pop(void)
{
   if(num==0){
      printf("スタックにデータがありません\n");
      return 0;
   }
   num--;
   return stack[num];
}
 
int check(char* str)
{
   int i;
   num=0;
   for( i=0 ; str[i]!='\0' ; i++ ){
      switch(str[i]){
         case '(':
            push(SMALL); break;
         case '{':
            push(MEDIUM); break;
         case '[':
            push(LARGE); break;
         case ')':
            if(pop()==SMALL) break;
            else return ERROR;
         case '}':
            if(pop()==MEDIUM) break;
            else return ERROR;
         case ']':
            if(pop()==LARGE) break;
            else return ERROR;
      }
   }
   if(num==0) return OK;
   else return ERROR;
}
 
void main(void)
{
   char str[100];
 
   printf("式を入力（半角100文字以内）：");
   scanf("%s",str);
 
   if(check(str)==OK) printf("カッコの対応はとれています\n");
   else printf("カッコの対応がとれていません\n");
 
   return;
}