import java.util.Scanner;

public class comandlinetest {
    public static void main(String[] args){

	int n = args.length;	//配列の要素を求める。
    
	// for (int i=0; i<n; i++) {
	// System.out.println(args[i].length());
	// System.out.println(args[i]);
	// }
    // double[] number = new double[n];
    int sum = 0;
    
    // for(int i=0; i<n; i++) {
    // number[i] = Double.parseDouble(args[i]);
    // sum += number[i];
    // System.out.print(args[n] + "+");	//ずっと増やす。
    // }
    // System.out.println();		//改行
    // System.out.println("= " + sum);		//改行
   
   	for (int i=0; i<n; i++) {
	sum += Integer.parseInt(args[i]);
	}     
   	System.out.println("合計：" + sum);		//改行
    }
}