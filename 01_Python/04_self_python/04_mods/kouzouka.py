'''
構造化パターンマッチング
match文とcase文で分岐可能

パターンマッチングで使用するmatch、case、_は
ソフトキーワードというPython文法上の新しい概念。
if、forなどのキーワードと異なり、変数名等に使用可能

'''
key = 'A'
match key:
    case 'A':
        result = "A-key."
    case 'B':
        result = "B-key."
    case 'C':
        result = "C-key."
    case _:
        result = "Non-key."

print(result)


order = ("drink", "coffee")

match order:
    case("drink", drink):
        print(f"ドリンク[{drink}]です。")
    case("cake", cake):
        print(f"デザート[{cake}]です。")


from collections.abc import Sequence
'''シーケンス：コレクションの中で、
整数値で要素参照ができるもの（辞書型はシーケンスではない
'''


'''
https://note.nkmk.me/python-type-isinstance/
isinstance(object, class)は、第一引数のオブジェクトが、
第二引数の型のインスタンス、またはサブクラスのインスタンスであれば
Trueを返す関数。（スーパークラスにも対応）
'''
answerA = isinstance("string", str)
answerB = isinstance(123, str)
print(answerA, answerB)


answerC = isinstance(True, bool)
answerD = isinstance(True, int)
print(answerC, answerD)

