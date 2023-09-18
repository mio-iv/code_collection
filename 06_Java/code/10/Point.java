public class Point {
    int	x;				//フィールド（型）
    int y;
    public Point() {	//コンストラクタ
    x=0;
    y=0;
    }
    public Point(int x, int y){	//コンストラクタ２
    	this.x = x;
        this.y = y;
    }
    public double distance() {	//メゾッド
    	return Math.sqrt(x*x + y*y);
    }
    
}