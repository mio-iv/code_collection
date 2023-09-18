import java.util.Scanner;

public class test_07_2 {
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);
    
    System.out.print("文字列1＞");
    String str1 = scan.nextLine();
    System.out.print("文字列2＞");
    String str2 = scan.nextLine();
    
    // if (str1 == str2) {	//これは２つの参照先が同じことを表す。
    //そのため、基本的にすべてfaileになる。
    if (str1.equals(str2)) {	//String型メゾッドを使用する。equalsで
        				//参照先の文字列が内容ベースで同じか。
    	System.out.println("同じ");
    } else {
    System.out.println("違う");
    }
    
    
    }
}