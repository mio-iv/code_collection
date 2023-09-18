import java.util.Scanner;

public class Sample_08_1 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        final int SIZE = 50;
        int[] score = new int[SIZE];
        
        int num = 0;
        while (true) {
            System.out.print("点数 > ");
            int point = scan.nextInt();
            
            if (point == -1) {
                break;
            }
            
            score[num] = point;
            num++;
        }
        
        int sum = 0;
        for (int i=0; i<num; i++) {
            sum += score[i];
        }
        double ave = (double)sum / num;
        System.out.println("平均点 : " + ave);
        
        int max = score[0];
        for (int i=1; i<num; i++) {
            if (max < score[i]) {
                max = score[i];
            }
        }
        System.out.println("最高点 : " + max);
    }
}
