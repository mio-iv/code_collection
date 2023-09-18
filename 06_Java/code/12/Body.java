public class Body {
    String name;
    double height;
    double weight;
    	//コンストラクタ1
    public Body(){
    	set("",0.0,0.0);
    }	//コンストラクタ2
    public Body(double height, double weight) {
    	set("", height, weight);
    }  	//コンストラクタ3
    public Body(String name, double height, double weight) {
    	set(name, height, weight);
    }
    //設定するメゾッド
   public void set(String name, double height, double weight){
        this.name = name;
        this.height = height;
        this.weight = weight;
    }
    //標準体重を計算するメゾっド
    public double calcStdWeight() {
    	double meterHeight = height / 100.0;
        double stdWeight = meterHeight * meterHeight * 22.0;
        return stdWeight;
    }
    //BMIを計算するメゾッド
    public double calcBmi() {
        double meterHeight = height / 100.0;
        double bimVal = weight / (meterHeight * meterHeight);
        return bimVal;
    }
    //名前、身長、体重の値を表示するメゾッド
    public void print(){
    	System.out.println("名前" + name);
        System.out.println("身長" + height);
    	System.out.println("体重" + weight);
    }
}