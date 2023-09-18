import java.util.Scanner;

public class methodtest_09_1{
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);

	System.out.print("身長を入力してください（cm）＞");
    double height = scan.nextDouble();
    //メゾッド（関数）呼び出し
    double stdWeight = calcStdWeight(height);
    
    System.out.print("体重を入力してください（kg）＞");
    double realWeight = scan.nextDouble();
    //戻り値のないメゾッドの呼び出し
    printMessege(realWeight,stdWeight);
    }


    //標準体重を出力するメゾッド（ファンクション）
    public static double calcStdWeight(double height) {
    	height = height /100.0;
        double StdWeight = height * height * 22.0;
        return StdWeight;
    }
    
	//メッセージを表示するメゾッド（戻り値はなし）
    public static void printMessege(double realweight,double StdWeight) {
    	double diff = realweight - StdWeight;
 	   	if (diff < -10) {
 	   		System.out.println("Underweight.");
 	   	} else if (diff <= 10) {
 	   		System.out.println("Normal.");
 	   	} else {
 	   		System.out.println("Overweight.");
    	}
        return;	//戻り値を持たないが、meinメゾッドに戻るとき、このように書く。
        
    }
}