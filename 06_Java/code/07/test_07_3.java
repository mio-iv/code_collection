import java.util.Scanner;

public class test_07_3 {
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);
    
    
    String str = "abcd";
    // System.out.println("文字列＞"); 
    // String str2 = scan.nextLine();
        
    // System.out.println();
    System.out.println(str.length());
	System.out.println("文字列の2番目" + str.charAt(1));
	System.out.println("cが最小にでてくる場所を探す。" + str.indexOf("c"));
	System.out.println("abから始まるか" + str.startsWith("ab"));
    System.out.println("abから始まるか" + str.substring(0,3));
    }
}