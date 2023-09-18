import math
import sys

def lcm(a, b):
    '''最大公約数を求める関数'''
    return int(a * b / math.gcd(a, b))

if __name__ == '__main__':
    argv = sys.argv

    print(argv)
    if(len(argv) != 3):
        #引数が2つあるかチェックし、なければメッセージを出力して終了
        print("使い方 : python %s 整数1 整数2" % argv[0])
        sys.exit()

    x = int(argv[1])    #文字列として入力された引数を整数に変換
    y = int(argv[2])
    print("最小公倍数は%dです" % lcm(x,y))