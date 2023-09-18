import java.util.Scanner;

public class Sample_14_4 {
    public static void main(String[] args){
    // String str = new String("100.0");
    
    // int a = Integer.parseInt(str);
    // //ここで例外発生の可能性。
    // System.out.println(a);
        
    Scanner scan = new Scanner(System.in);
    System.out.print("整数値：");
    int a = scan.nextInt();
    //例外の可能性。
    System.out.println("入力値：" + a);
    }
}