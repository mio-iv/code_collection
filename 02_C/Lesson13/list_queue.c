//リストによるキュー操作関数
#include <stdio.h>
#include <stdlib.h>
 
typedef struct node{
   struct node* next;
   int data;
}Node;
 
Node* head=NULL;    //先頭ノードへのポインタ
Node* tail=NULL;    //最後尾ノードへのポインタ
 
void enqueue(int x)
{
   Node* p;
   p = (Node*)malloc(sizeof(Node));
   p->next = NULL;
   p->data = x;
   if(tail==NULL) head=p;
   else tail->next=p;
   tail=p;
   return;
}
 
int dequeue(void)
{
   int x;
   Node* p;
   if(head==NULL){
      printf("キューにデータがありません");
      return -1;
   }
   p=head;
   x=p->data;
   head=p->next;
   free(p);
   return x;
}
 
int firstdata_queue(void)
{
   if(head==NULL) return -1;
   else return head->data;
}
 
void print_queue()
{
   Node* p;
   for( p=head ; p!=NULL ; p=p->next ){
      printf("%d\n",p->data);
   }
   return;
}