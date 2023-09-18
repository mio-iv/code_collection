import java.util.Scanner;
public class test {
    public static void main(String[] args) {
    Scanner scan = new Scanner(System.in);
 
    int number;
    do{
    System.out.print("記入>");
    number = scan.nextInt();
    }while(number <= 0);
        
	int imput = number;  
    int digit = 0;
    while (imput > 0) {
    imput /= 10;
    digit ++;
    }
    System.out.println(digit + "桁");
	//--------------------------------------------
	int imput2 = number;  
    int digit2 = 0;
    
        
    do{
    imput2 /= 10;
    digit2 ++;
    }while (imput2 > 0);
    System.out.println(digit2 + "桁");  
        
        
        

        
    }
}