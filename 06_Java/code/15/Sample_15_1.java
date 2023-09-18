import java.util.Scanner;
import java.io.*;

public class Sample_15_1 {
    public static void main(String[] args){
    Scanner scan = new Scanner(System.in);
    System.out.print("ファイル名＞");
    String filename = scan.next();
    try{
        //file入力の準備
        FileReader fr = new FileReader(filename);//FileNotFound
        BufferedReader br = new BufferedReader(fr);
        //出力処理
        // String line;
        // while ((line = br.readLine()) != null) {
        //     System.out.println(line);
        // }
        String line = br.readLine();
        while
            //fileを閉じる。
        	br.close();	//IOE…の可能性
    } catch (FileNotFoundException e) {
    	System.out.println("ファイル" + filename + "は見つかりませんでした。");
    	System.exit(1);
    } catch (IOException e) {
    	System.out.println("入出力エラーが発生しました。");
    }
    
    }
}