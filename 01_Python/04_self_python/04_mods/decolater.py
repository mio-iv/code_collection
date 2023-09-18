'''
Pythonのデコレータを理解するまで
https://zenn.dev/ryo_kawamata/articles/learn_decorator_in_python
デコレータ：関数やクラスの前後に特定の処理を追加できる機能
関数やクラス宣言の前に@デコレータ名を記述することで実現
（実態は関数を受け取り関数を返す関数）
'''

'''
https://it-biz.online/python/variable-length/
引数の数を任意に指定できる引数を「可変長引数」と呼び、
Pythonでは慣例的に「*agrs」「**kwargs」として記述します。
例)def add_func(a, *b):
→add_func(2, 9,10,11...)
アスタリスク1つ:複数引数をタプルで受け取る ()で表し、イミュータブル（要素変更不可。
アスタリスク2つ:複数の値を辞書で受け取る
def func2(**points):
func2(English='100', Math='98', Science='76' ,Social='97' ,Japanese='82')
'''
# 関数を受け取り関数を返す関数
def test(f):
    def rap(*args, **keywords):
        print('rap実行中')

        print(f'{f.__name__}の実行')
        result = f(*args, **keywords)
        print(f'結果：{result}')

        return result
    
    return rap


@test
def return_test():
    print("return_testの実行をしています。。")
    return 2

return_test()
