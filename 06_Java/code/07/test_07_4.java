import java.util.Scanner;

public class test_07_4 {
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);
 
    // String str = "CyberUniversityIT総合学部";
    System.out.print("文字列>");
    String str = scan.nextLine();
    
    /*パターン１*/
    int n = str.length();
    System.out.print("9月は秋です。");
    
	for (int i=n-1; i>=0; i--) {
    
	char a = str.charAt(i);
	System.out.print(a);	
	}
	System.out.println();
        
	/*パターン２*/
    char[] charArr = str.toCharArray();
    //cgarArrが、配列に。indexの最大値は文字列長-1。
    for (int j=charArr.length-1; j>=0; j--) {
    	System.out.print(charArr[j]);
    }
        
        
    }
}