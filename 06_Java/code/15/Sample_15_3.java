import java.util.Scanner;
import java.io.*;

public class Sample_15_3 {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);

        System.out.print("書き込み先ファイル名＞");
        String filename = scan.next();
        	//多分ここで注意エラー処理をしたほうがいい。
        //すでに存在します。上書きしますか?YesNo
        try{
        //file出力の準備
        FileWriter fw 		= new FileWriter(filename);
        BufferedWriter bw 	= new BufferedWriter(fw);
        PrintWriter pw 		= new PrintWriter(bw);
        //すでにfilenameでファイルがある場合は上書きされるため注意。
        //基本は新規作成。
        for (int i=1; i<=10; i++) {
        	// pw.println(i*100);			//ファイル書き込み
        	// System.out.println(i*100);	//画面上へ出力
            pw.printf("%4d\n",i*100);
            System.out.printf("%4d\n",i*100);
        }  
            
        pw.close();    
        }catch (IOException e){
            System.out.println("ファイル入出力エラーが発生");
        }
    
    }
}