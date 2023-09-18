// 14-2a 行きがけ順による巡回
void traverse_pre_order(Node* root)
{
   if(root==NULL)return;
   printf("%d\t",root->data);
   traverse_pre_order(root->left);
   traverse_pre_order(root->right);
}


// 14-2b 通りがけ順による巡回
void traverse_in_order(Node* root)
{
   if(root==NULL)return;
   traverse_in_order(root->left);
   printf("%d\t",root->data);
   traverse_in_order(root->right);
}


// 14-2c 帰りがけ順による巡回
void traverse_post_order(Node* root)
{
   if(root==NULL)return;
   traverse_post_order(root->left);
   traverse_post_order(root->right);
   printf("%d\t",root->data);
}


// 帰りがけ順により、全てのノードのメモリ領域を free 関数により解放する関数
void free_tree(Node* root)
{
   if(root==NULL)return;
   free_tree(root->left);
   free_tree(root->right);
   free(root);
}


// 14-2e 幅優先探索による巡回
void traverse_level_order(Node* root)
{
    int x;
    Node* p;
    enqueue(root);
    while(1){
        p=dequeue();
        if(p==NULL)return;
        printf("%d\t",p->data);
        if(p->left!=NULL) enqueue(p->left);
        if(p->right!=NULL) enqueue(p->right);
    }
}


#define MAX_NUM 10
Node* queue[MAX_NUM];
int first=0;
int last=0;
 
void enqueue(Node* data)
{
   if( (last+1)%MAX_NUM == first ){
      printf("キューは満杯で、追加できません\n");
      return;
   }
   queue[last]=data;
   last=(last+1)%MAX_NUM;
   return;
}
 

//  14-2f キューの操作関数
Node* dequeue(void)
{
   Node* ret;
   if(first==last){
      //printf("キューにデータがありません\n");
      return NULL;
   }
   ret=queue[first];
   first=(first+1)%MAX_NUM;
   return ret;
}



