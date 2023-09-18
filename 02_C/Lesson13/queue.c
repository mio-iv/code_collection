// queue
#include <stdio.h>
 
#define MAX_NUM 10
int queue[MAX_NUM];
int first=0;
int last=0;
 
void enqueue(int data)  //エンキュー(データの追加)
{
   if( (last+1)%MAX_NUM == first ){
      printf("キューは満杯で、追加できません\n");
      return;
   }
   queue[last]=data;
   last=(last+1)%MAX_NUM;
   return;
}
 
int dequeue(void)   //デキュー（データの取り出し）
{
   int ret;
   if(first==last){
      printf("キューにデータがありません\n");
      return -1;
   }
   ret=queue[first];
   first=(first+1)%MAX_NUM;
   return ret;
}
 
int firstdata_queue(void)   //キューの先頭データを返す
{
   if(first==last) return -1;
   else return queue[first];
}
 
void print_queue()  //キューの内容を表示する
{
   int i;
   for( i=first ; i!=last ; i=(i+1)%MAX_NUM ){
      printf("%d\n",queue[i]);
   }
   return;
}