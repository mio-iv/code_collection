import java.util.Scanner;
import java.util.Random;

public class Ex_08_4_2001015441 {
    public static void main(String[] args) {
    //オブジェクト生成
    	Scanner scan 	= new Scanner(System.in);
		Random rand 	= new Random();
        
    //変数等定義
    	final int Num 	= 200;	//ダイスを振る回数を決める
    	int temp[]		= new int[Num];	//回数分の配列を確保
        int j			= 0;		//初期化（出力時回す用）
        
    //ダイスを振る部分。結果を格納。
    for (int i=0; i<Num; i++) {
    	 temp[i] = rand.nextInt(6) + 1;	//1~6を生成 
    }
        
    //出力
    for (int a=1; a<=6; a++) {		//6回分回す。 
        System.out.print(a + " ： ");
        
        while (j < Num) {
    		if (a == temp[j]) {
    			System.out.print("*");
            }
        	j++;
        }
        
        j=0;	//初期化
        System.out.println();	//改行
    }
        
    }
}