//createList 1個のリストを作成する。
#include <stdio.h>
#include <stdlib.h>
 
typedef struct node{    //各ノードのための構造体を定義
    struct node* next;
    int data;
}Node;
 
Node* add_node(Node* next, int data)
{   //引数をメンバにしたノードを作成.そのノードへのポインタを返す関数 add_node を定義
    Node* p;
    p = (Node*)malloc(sizeof(Node));    //malloc 関数により新しいノードを格納するための領域を確保
    //戻り値として得られるアドレスをNode型へのポインタ p へ格納
    //(Node*) は型変換のためのキャスト演算子。
    p->next = next; //新しいノードを作成
    p->data = data;
    return p;   //作成されたノードへのポインタを戻り値として返す
}
 
void main(void)
{
    Node* head=NULL;    //リスト先頭を指すポインタ head を宣言してNULLをセットし、空のリストを作成
    int data;
 
    printf("整数データ入力：");
    scanf("%d",&data);
    head = add_node(head,data); //ノードを add_node関数により作成し先頭ノードとする
 
    printf("\n=入力データ=\n");
    printf("%d\n",head->data);
 
    free(head); // 領域を解放
    return;
}