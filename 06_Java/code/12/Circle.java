public class Circle extends Point {
    private int r;
    public Circle(){
    	super();
    	r= 0;
    }
    public Circle(int x,int y,int r){
        super(x,y);
        this.r = r;
    }
    public int getR(){
    	return r;
    }
    public void setR(int r){
        this.r = r;
    }
    public double circleArea(){
    	return r * r * Math.PI;
    }
    
}