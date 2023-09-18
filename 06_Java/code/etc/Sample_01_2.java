public class Sample_04_1 {
    public static void main(String[] args) {
        double x = 3.0;
        double a = Math.pow(x, 2.0);               //
        double b = Math.sqrt(x);                   // 数学関数を利用した計算
        double c = Math.sin(Math.toRadians(30.0)); //
        
        System.out.println(" a : " + a);
        System.out.println(" b : " + b);
        System.out.println(" c : " + c);
        
        System.out.println("PI : " + Math.PI);     // 数学定数の確認
    }
}
