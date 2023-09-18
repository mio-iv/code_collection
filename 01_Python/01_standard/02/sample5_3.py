'''
プログラムの仕様
対話形式で整数を2個受け取り、
その最小公倍数を計算しファイル（output.txt）に出力する。
'''

import math
import sys

def lcm(a, b):
    '''最大公約数を求める関数'''
    return int(a * b / math.gcd(a, b))

def input_data():
    try:
        input1 = input('1つ目の整数を入力してください : >> ')
        x = int(input1)
        input2 = input('2つ目の整数を入力してください : >> ')
        y = int(input2)
    except ValueError:
        print('整数を入力してください。')
    else:
        return x, y

if __name__ == '__main__':
    while(True):
        x, y = input_data()
        if x:
            break

        result = lcm(x, y)
        string = f"最大公約数は{result}です。"

        file = open('output.txt', 'w')  # 書き込みモードで開く
        file.write(string)
        file.close()

        print("ファイルに「"+string+"」と出力しました。")