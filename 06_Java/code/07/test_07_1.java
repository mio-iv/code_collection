import java.util.Scanner;

public class test_07_1 {
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);
    
    
    String str1 = "abcd";
    System.out.println("文字列＞"); 
    String str2 = scan.nextLine();
        
    System.out.println(str1); 
    System.out.println(str2);
        
        
        String str = "Cyber";
        System.out.println(str);
        
        str = "University";	//参照先のメモリ領域を変えたことになる。
        System.out.println(str);
    }
}