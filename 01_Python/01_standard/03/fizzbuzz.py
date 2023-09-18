import sys

def tofizzbuzz(n):
    if(n%3==0 and n%5==0):
        str = "FizzBuzz"
    elif (n%3==0):
        str = "Fizz"
    elif (n%5==0):
        str = "Buzz"
    else:
        str = n
    
    return str


if __name__ == '__main__':
    argv = sys.argv

    if(len(argv) != 2):
        print("使い方 : python %s 整数1" % argv[0])
        sys.exit()
    
    try:
        x = int(argv[1])    # 文字列として入力された引数を整数に変換
        print(tofizzbuzz(x))
    except:
        print("整数を引数に指定して下さい。")
        sys.exit()