import java.util.Scanner;
import java.util.Random;

public class Sample_08_2 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        Random rand = new Random();
        
        System.out.print("サイコロを振る回数 > ");
        int max = scan.nextInt();
        
        int n = 0;
        for (int i=0; i<max; i++) {
            int dice = rand.nextInt(6) + 1;
            System.out.print("  " + dice);
            n++;
            if (n == 20) {
                System.out.println();
                n = 0;
            }
        }
        System.out.println();
    }
}
