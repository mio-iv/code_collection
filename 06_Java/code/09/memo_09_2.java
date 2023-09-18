import java.util.Random;

public class memo {
    public static void main(String[] args) {
    
    
   // int Score = randamScore();
    
    //予め要素数50の配列を宣言しておいて、データを格納しておいて、
    int[] score = new int[50];
    //下のように呼び出す。
    double ave = calcAverage(score);
    }
	//引数のないメゾッドを生成で切る。
   /public static int randamScore() {
	Ra/ndom rand = new Random();
   / reurn rand.nextInt(101);   //数のデータは0~100の中。
   /}
    
    //配列を引数とすることが出来る。
    public static double calcAverage(int[] arr) {
    	int total = 0;	//初期化
    	for (int i=0; i<arr.length; i++) {
    		total += arr[i];
    	}
    	return double(total)/arr.length;
    }
    //配列を戻り値とすることが出来る。
    public static int[]  makescore(int n) {
    	int[] arr = new int[n];	//要素数nの配列arrを定義。
        for (int i=0; i<n; i++) {
            arr[i] = randamScore();
            //randamScoreメゾッドを呼び出し
        }
        return arr;
    }
    
    
    
}
    