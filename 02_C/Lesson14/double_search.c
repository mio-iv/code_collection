// 二分木のための構造体定義
typedef struct node{
   int data;
   struct node* left;
   struct node* right;
}Node;

// 新ノードの作成
Node* new_node(int x)
{
   Node* p;
   p=(Node*)malloc(sizeof(Node));
   p->data = x;
   p->left = NULL;
   p->right=NULL;
   return p;
}

// 二分探索木へのデータ追加
Node* insert_tree(int x, Node* root)
{
   Node* p;
 
   if(root==NULL) return new_node(x);
 
   p=root;
   while(1){
      if(x < p->data){
         if(p->left != NULL) p=p->left;
         else{
            p->left = new_node(x);
            return root;
         }
      }else{
         if(p->right != NULL) p=p->right;
         else{
            p->right = new_node(x);
            return root;
         }
      }
   }
}

//再起呼び出し活用版
Node* insert_tree(int x, Node* root)
{
   if(root==NULL) return new_node(x);
   if(x < root->data) root->left=insert_tree(x,root->left);
   else root->right=insert_tree(x,root->right);
   return root;
}

// 14-1d-① 繰り返しによる二分探索木の検索
Node* search_tree(int x, Node* root)
{
   Node* p=root;
   while(p!=NULL){
      if(x==p->data) return p;
      else if(x < p->data) p=p->left;
      else p=p->right;
   }
   return NULL;
}

// 14-1d-② 再帰呼び出しによる二分探索木のデータ検索
Node* search_tree(int x, Node* root)
{
   if(root==NULL) return NULL;
   if(x == root->data) return root;
   if(x < root->data) return search_tree(x,root->left);
   else return search_tree(x,root->right);
}
