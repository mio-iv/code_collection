import java.util.Scanner;

public class Ex_12_1 {
public static void main(String[] args) {
	Scanner scan 	= new Scanner(System.in);    
    
    System.out.print("身長（cm）＞");
    double h = scan.nextDouble();
    System.out.print("体重（㎏）＞");
    double w = scan.nextDouble();

    double sw =	calcStdWeight(h);
	System.out.println("標準体重" + sw + "kg");
    
    printMessage(w,sw);
    
}    
    //標準体重を呼び出すメゾッド
    public static double calcStdWeight(double height) {
	height = height/100;
    double stdWeight = height * height * 22.0;
    return stdWeight;
    }
    
    public static void printMessage(double weight, double stdWeight) {
    double diff = weight - stdWeight;
    if (diff < -10) {
		System.out.println("Underweight");
    } else if (diff <= 10) {
        System.out.println("Normal");
    } else {
    	System.out.println("Overweight");
    }
    
    }
}


