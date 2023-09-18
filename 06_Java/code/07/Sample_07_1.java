public class Sample_07_1 {
    public static void main(String[] args) {
        String str1 = "abc";
        String str2 = "xyz";
        System.out.println("str1 : " + str1);
        System.out.println("str2 : " + str2);

        str2 = str1;	//参照先を代入しているだけ。
        System.out.println("str1 : " + str1);
        System.out.println("str2 : " + str2);

        
        
        str2 = "ABC";
        System.out.println("str1 : " + str1);
        System.out.println("str2 : " + str2);
    }
}
