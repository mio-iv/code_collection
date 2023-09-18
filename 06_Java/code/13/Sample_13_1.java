import shape.Point;
import shape.Rectangle;	//shapeパッケージのクラスを読み込む
// import shap.*;	タイプインポートオンデマンド宣言も可

public class Sample_13_1 {
    public static void main(String[] args){
     Point p = new Point(10,7);
        double d = p.distance();
     
    System.out.println("==== 点p ====");
    System.out.println("X座標：" + p.getX());
    System.out.println("Y座標：" + p.getY());
    System.out.printf("原点からの距離：%.3f\n",d);
        
    Rectangle rec = new Rectangle(3,5,9,9);
    d = rec.distance();

    System.out.println("==== 長方形rec ====");
    System.out.println("左下の座標：（" + rec.getX() + "," + rec.getY() + "）");
    System.out.println("右下の座標：（" + rec.getX2() + "," + rec.getY2() + "）");
    System.out.println("面積：" + rec.area());
    System.out.printf("原点からの距離：%.3f\n",d);
    }
}