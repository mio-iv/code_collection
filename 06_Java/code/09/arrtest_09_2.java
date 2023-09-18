import java.util.Random;

//とあるテストを50人が受けた。平均点と最高点を求める。
public class arrtest_09_2 {
    public static void main(String[] args) {
    
    final int num = 50;	//人数
    int[] score = new int[num];
    
    score = makescore(num);		//データ格納
    double ave = calcAverage(score);	//平均作成
    double max = calcMax(score);
    //出力
    System.out.println("平均点：" + ave);
    System.out.println("最高点：" + max);
    }
	
  	public static int randamScore() {
		Random rand = new Random();
   		return rand.nextInt(101);
   }
    
    //配列を戻り値とすることが出来る。
    public static int[] makescore(int n) {
    	int[] arr = new int[n];
        for (int i=0; i<n; i++) {
            arr[i] = randamScore();
        }
        return arr;
    }
        
    public static double calcAverage(int[] arr) {
    	int total = 0;	//初期化
    	for (int i=0; i<arr.length; i++) {
    		total += arr[i];
    	}
    	return (double)total/arr.length;
    }
    
    public static double calcMax(int[] arr) {
    	int max = arr[0];	//初期化
    	for (int i=1; i<arr.length; i++) {
    		if (max < arr[i]) {
            	max = arr[i];
            }
    	}
    	return max;
    }   
    

}