import java.util.Scanner;
public class num {
    public static void main(String[] args) {
    Scanner scan = new Scanner(System.in);
    
    //System.out.print("1からいくつまでを足すか？＞");
    //int input = scan.nextInt;
    
    int i,sum = 0;
    for(i=1;i<1000;i++){
    sum = sum + i;
    }
    System.out.println(sum);
    System.out.println(sum += 100000);

        
    i = 1;
    sum = 0;
    while(i<=1000){
    	sum += i;
    	i++;}
    System.out.println(sum);
    }
}