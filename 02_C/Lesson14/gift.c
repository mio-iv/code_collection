#include <stdio.h>
#include <stdlib.h>
 
typedef struct node{
   struct node* left;
   struct node* right;
   int data;
}Node;
 
//キューの準備
#define MAX_NUM 10
Node* queue[MAX_NUM];
int first=0;
int last=0;
void enqueue(Node*);
Node* dequeue(void);
 
//関数のプロトタイプ宣言
Node* new_node(int);
Node* insert_tree(int, Node*);
Node* search_tree(int, Node*);
void traverse_pre_order(Node*);
void traverse_in_order(Node*);
void traverse_post_order(Node*);
void traverse_level_order(Node*);
void free_tree(Node*);
 
void main(void)
{
   int x;
   Node* p;
   Node* root=NULL;
 
   printf("\n=データの入力=\n");
   while(1){
      printf("データを入力してください (-1で終了)：");
      scanf("%d",&x);
      if(x==-1)break;
      else root=insert_tree(x,root);
   }
 
   printf("\n\n=全データ表示=");
   printf("\n行きがけ順\n");
   traverse_pre_order(root);
   printf("\n通りがけ順\n");
   traverse_in_order(root);
   printf("\n帰りがけ順\n");
   traverse_post_order(root);
   printf("\nレベル順\n");
   traverse_level_order(root);
    
   printf("\n\n=データの検索=\n");
   while(1){
      printf("検索目標（-1で終了）：");
      scanf("%d",&x);
      if(x==-1)break;
      p=search_tree(x,root);
      if(p!=NULL) printf("見つかりました\n");
      else printf("見つかりませんでした\n");
   }
 
   free_tree(root);
}