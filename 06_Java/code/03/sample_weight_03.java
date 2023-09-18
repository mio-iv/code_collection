import java.util.Scanner;

public class sample_weight_03{
    public static void main(String[] args){
    	Scanner scan = new Scanner(System.in);
        //入力受付        
        System.out.print("身長を入力してください（cm）＞");
        double height = scan.nextDouble();
        //計算
        height = height / 100.0;	//メートルに直す
        double weight = height * height * 22.0;
        //標準体重の出力
        //System.out.println("標準体重は、" + weight + "kgです。");
        System.out.print("体重を入力してください（kg）＞");
        double realweight = scan.nextDouble();
        //実際の体重を入力
        if (realweight - weight < -10) System.out.println("unweight");
    	else if(realweight - weight > 10) System.out.println("overweight");
        else System.out.println("nomal");
    }
}