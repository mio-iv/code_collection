import java.util.Scanner;

public class sample_03_kisetsu {
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);
    
    System.out.print("何月？＞");
    int month = scan.nextInt();
    
    
    switch (month){
    case 3:
    case 4:
    case 5:
    System.out.println("春です。");
            break;
    case 6:
    case 7:
    case 8:
    System.out.println("夏です。");
            break;
	case 9:
    case 10:
    case 11:
    System.out.println("秋です。");
            break;    
    case 12:
    case 1:
    case 2:
    System.out.println("冬です。");
            break;
    default:
    System.out.println("正常な数値を入力して下さい。");
    }    
    }
}