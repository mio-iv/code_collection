//排列（Arrey）同じ型の変数を複数個まとめて扱える。
//カラムが1列のみのテーブルとも考えられる？
//int[]	data; or int	data[];

//①配列のア宣言。変数名の設定。（配列の実態はなし）
//②配列の実態を生成。設定済み変数から参照する。
// int[] data = new int[5];	//完結な書き方。

public class sample_6_01 {
    public static void main(String[] args) {
    
    int[] data = new int[5];
    // data[0] = 10;
    // data[1] = data[0] + 15;
    // data[2] = data[1] * 4;
    // System.out.println("data[2] : " + data[2]);
    for (int i=0; i<5; i++) {	
        	//i<data.lengthで、格納数の最後までで回せる
    	data[i] = 100 - i * 10;
        System.out.println(data[i]); 
    }
    System.out.println(data.length);
        
              
    int[] DATA = {20,30,40,50,60};	//初期化
    int I = 0;
    while (I<5) {
    	System.out.println(DATA[DATA.length-I-1]);
    	I++;
    }
    
    final int number=5,subject=3;
    int[][] score  = new int[number][subject];	//5人×三教科的な
    for (int a=0; a<number; a++) {
     	for (int b=0; b<subject; b++) {
            score[a][b] = ((a+1)*(b+1)*83+15)%101;
            System.out.println(a+1+"人目の"+b+1+"教科目の点数は"+score[a][b]);
        }
    }
    
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
}