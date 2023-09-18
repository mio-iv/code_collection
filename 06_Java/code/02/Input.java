import java.util.Scanner;

public class Input {
    public static void main (String[] args){
    Scanner scan = new Scanner(System.in);
    
    System.out.print("整数＞");
    int A = scan.nextInt();
    System.out.print("実数＞");
    double B = scan.nextDouble();
    //ここから出力
    System.out.println("整数は" + A + "、実数は、" + B + "です。");
    }

}