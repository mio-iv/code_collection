public class Sample_04_2 {
    public static void main(String[] args) {
        System.out.printf("hello, ");
        System.out.printf("world\n");
        
        System.out.println();
        
        int a = 123;
        System.out.printf("%d\n", a);
        double x = a / 10.0;
        System.out.printf("%f\n", x);
        
        System.out.println();
        
        a = 3;
        x = Math.sqrt(3.0);
        System.out.printf("a is %d, x is %f\n", a, x);
        
        System.out.println();
        
        a = 4;
        int b = 1234;
        System.out.printf("a:%4d\n", a);
        System.out.printf("b:%4d\n", b);
        
        System.out.println();
        
        x = Math.sqrt(2.0);
        System.out.println("x:" + x);
        System.out.printf("x:%f\n", x);
        System.out.printf("x:%8.5f\n", x);
        System.out.printf("x:%.2f\n", x);
    }
}
