public class Ex_12_2etc {
public static void main(String[] args) {
    Body st1 = new Body("Frank",175.0,65.5);
    Body st2 = new Body(177.0,72.0);
    st2.name = set();
    
    System.out.println("\n===学生1===");
    st1.print();
    
    double sw = st1.calcStdWeight();
    System.out.println("標準体重：" + sw + "kg");
    double bmi = st1.calcBmi();
    System.out.printf("bmi：%.2f\n",bmi);
    
    System.out.println("\n===学生2===");
    
    System.out.println("名前：" + st2.name);
    System.out.println("身長：" + st2.height);
    System.out.println("体重：" + st2.weight);

    sw = st2.calcStdWeight();
    bmi = st2.calcBmi();
    System.out.println("標準体重：" + sw + "kg");
    System.out.printf("bmi：%.2f\n",bmi);
}
}