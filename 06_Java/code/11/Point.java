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
    
    public int getx(){
    return x;
    }
    
	public int gety(){	//メゾッドは戻り値の型を。
    return y;
    }
    public void setx(int x){	//返り値なし
    this.x = x;
    }
    public void sety(int y){	//返り値なし
    this.y = y;
    }
    
    public double distance() {
    	return Math.sqrt(x*x + y*y);
    }
    
    
}