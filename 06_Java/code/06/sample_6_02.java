public class sample_6_02 {
    public static void main(String[] args) {
    
    final int SIZE = 50;	//finalを宣言変数前に付けると定数化する
    ///※final変数で宣言するとき変数名ははすべて大文字にする慣習がある。
    int[] score = new int[SIZE];
    //点数生成
    for (int i=0; i<SIZE; i++) {
   		score[i] = (i*83 + 15) % 101;
    }  
    
    int sum = 0;
    for (int j=0; j<SIZE; j++) {
  		sum += score[j];
    }
    double ave = (double)sum / SIZE;
    System.out.println("平均点は" + ave);
    
    int max = score[0];
    for (int r=1; r<SIZE; r++) {
    	if (max < score[r]){
    		max = score[r];
    	}
    }
    System.out.println("最高点は" + max);
    }
}