import java.util.Scanner;

public class Weight{
    public static void main(String[] args){
    	Scanner scan = new Scanner(System.in);
        //入力受付        
        System.out.print("身長を入力してください（cm）＞");
        double height = scan.nextDouble();
        //計算
        height = height / 100.0;	//メートルに直す
        double weight = height * height * 22.0;
        //標準体重の出力
        System.out.println("標準体重は、" + weight + "kgです。");
    }
}