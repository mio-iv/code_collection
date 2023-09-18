import java.util.Scanner;
public class sankaku {
    public static void main(String[] args) {
    Scanner scan = new Scanner(System.in);
    
    System.out.print("何段？>");
    int n = scan.nextInt();
        
    int i,j;
    for(i=1;i<=n;i++){
        for(j=1;j<=i;j++){
    	System.out.print("*");    
        }
    System.out.println();//改行
	if (i == 10) break;        
    }
    }
}