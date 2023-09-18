public class Body {
    String name;
    double height;
    double weight;

    public Body(String n, double h, double w){
    name = n;
    height = h;
    weight = w;
    }
    
    public Body(){	//引数なしのコンストラクタ
    name = "";
    height = 0.0;
    weight = 0.0;
    }
//複数のパターンのコンストラクタを宣言しておくと、
//それに応じた形式でインスタンスを生成絵できる。
    // 緩衝材のようだ。

}

// Body student = new Body;
// // Scanner Scan = new Scanner(System.in);

// student.name = "Frank";
// student.height = 175.0;
// student.weight = 63.5;