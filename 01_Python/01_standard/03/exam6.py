# 3の倍数なら「Fizz」と表示 
# 5の倍数なら「Buzz」と表示 
# 3の倍数かつ5の倍数なら「FizzBuzz」と表示 
# それ以外の整数の場合はそのまま入力された数字を表示 
# 整数以外が入力された場合は入力エラーを表示

import sys
import fizzbuzz

def myinput(prompt):
    while True:
        key = input(f"{prompt}:>>")
        try:
            key_int = int(key)
            return key_int
        except ValueError:
            print("整数以外が入力されました。整数を入力して下さい。")


if __name__ == '__main__':

    x = myinput("整数を入力して下さい。")
    string = f"結果は「{fizzbuzz.tofizzbuzz(x)}」です"

    print(string)