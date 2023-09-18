import java.util.Scanner;
import java.io.*;

public class Sample_15_2 {
    public static void main(String[] args)
    {
        Scanner scan = new Scanner(System.in);
        System.out.print("ファイル名＞");
        String filename = scan.next();
        System.out.print("キーワード＞");  
        String keyword = scan.next();
        
        try{
            //file入力の準備
            FileReader fr = new FileReader(filename);//FileNotFound
            BufferedReader br = new BufferedReader(fr);
            //出力処理
            String line;
            int lineNum = 1;
            int Count = 0;
            while ((line = br.readLine()) != null) {
                    int n = line.indexOf(keyword);
                    if (n>0)
                        {
                            System.out.println(lineNum + ":" + line);
                            Count++;	//含まれていたライン数をカウント
                        }
                    lineNum++;	//次の行数にカウント
                }

            if (Count == 0) {
                    System.out.println("キーワード" + keyword + "は見つかりませんでした。");
                } else {
                    System.out.println("以上の" + Count + "行で見つかりました。");
                }

                //fileを閉じる。
                br.close();	//IOE…の可能性は見つかりませんでした。
        } catch (FileNotFoundException e) {
            System.out.println("ファイル" + filename + "は見つかりませんでした。");
            System.exit(1);
        } catch (IOException e) {
            System.out.println("入出力エラーが発生しました。");
        }
    
    }
}