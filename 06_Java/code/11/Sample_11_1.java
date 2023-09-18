public class Sample_11_1 {
    public static void main(String[] args){
    Point p = new Point(10,7);	//インスタンス生成
    double d = p.distance();
    
    System.out.println("x座標：" + p.getx());
    System.out.println("y座標：" + p.gety());
    System.out.printf("距離：%.3f\n",d);
        
    p.setx(5);
    p.sety(12);
    d = p.distance();	//再取得
        
    System.out.println("x座標：" + p.getx());
    System.out.println("y座標：" + p.gety());
    System.out.printf("距離：%.3f\n",d);
    }
}