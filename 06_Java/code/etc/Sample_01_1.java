import java.util.Scanner;

public class Ex_04_6_2001015441 {
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);
	
    System.out.print("華氏温度（F）＞");
    double F = scan.nextDouble();
    //以下計算と出力
    double C = (5.0/9.0) * (F-32.0);
    System.out.printf("摂氏温度（C）：%.1f\n", C);
    //分岐
    if (C < 10.0) {
    System.out.println("寒いです");
    } else if ( C < 20.0) {
    System.out.println("涼しいです");
    } else if (C < 30.0) {
    System.out.println("暖かいです");
    } else {
    System.out.println("暑いです");
    }
          
    }
}