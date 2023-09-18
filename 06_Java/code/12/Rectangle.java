public class Rectangle extends Point {
    private int x2;
    private int y2;
    
    public Rectangle() {
        super();
    	x2 = 0;
        y2 = 0;
    }
    public Rectangle(int x,int y,int x2,int y2){
    	super(x,y);
        this.x2 = x2;
        this.y2 = y2;
    }
    public int getX2(){
    return x2;
    }
	public int getY2(){
    return y2;
    }
    public void setX2(int x2){	//返り値なし
    this.x2 = x2;
    }
    public void setY2(int y2){	//返り値なし
    this.y2 = y2;
    }
    public double area(){
    	return (x2-super.getX())*(y2-super.getY());
    }
    public double distance(){
    	double cx = (super.getX() + x2) / 2.0;
        double cy = (super.getY() + x2) / 2.0;
        return Math.sqrt(cx*cx + cy*cy);
    }
}