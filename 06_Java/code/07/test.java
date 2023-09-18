public class test {
    public static void main(String[] args){
    // String str1 = "111";
    // String str2 = "222";
        
    // String str3 = str1 + str2;
    // System.out.println(str3);
        
    String str = "devil";
    char[] ch = str.toCharArray();
    
    System.out.print(str + "");
    for(int i=str.length()-1; i>=0; i--){
    	System.out.print(ch[i]);
    }
    }
}