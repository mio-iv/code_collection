public class ensyuu_06 {
    public static void main(String[] args) {
    
    final int number=5,subject=3;
    int[][] score 	= new int[number][subject];
    int[] sum 		= new int[number];
    double[] ave 	= new double[number];
        
    for(int i=0; i<number; i++) {
        score[i][0] = (i*83 + 15) % 101;
        score[i][1] = (i*79 + 14) % 101;
        score[i][2] = (i*57 + 18) % 101;
    	for (int j=0; j<subject; j++) {
    	    sum[i] += score[i][j];
    		}
    	ave[i] = (double)sum[i] / subject;
    
    	System.out.println("学生#" + i);
    	System.out.print("科目A： " + score[i][0] + ", ");
    	System.out.print("科目B： " + score[i][1] + ", ");
		System.out.println("科目C： " + score[i][2]);
    	System.out.println("合計点： " + sum[i]);
    	System.out.println("平均点： " + ave[i]);
		System.out.println();        
    }
    }
}