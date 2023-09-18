public class Point {

	private int x;
	private int y;

    public Point() {		//コンストラクタ
    	x = 0;
        y = 0;
    }		//コンストラクタは、
	
    public Point(int x, int y){
    	this.x = x;
        this.y = y;
    }
    
    public int getX(){
    return x;
    }
    
	public int getY(){	//メゾッドは戻り値の型を。
    return y;
    }
    public void setX(int x){	//返り値なし
    this.x = x;
    }
    public void setY(int y){	//返り値なし
    this.y = y;
    }
    
    public double distance() {
    	return Math.sqrt(x*x + y*y);
    }
    
    
}