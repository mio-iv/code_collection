'''
【Python】データクラスの定義と使い方
https://yumarublog.com/python/dataclass/
データクラスとは、データを保持するクラスのこと
dataclassesモジュールのdataclassデコレータを使うことで
__init__などのプリミティブなメソッドを省略して実装できるようになりました。

Python 3.7で追加されたdataclassesモジュールのdataclassデコレータを
クラスに修飾して定義
'''

from dataclasses import dataclass, field

@dataclass
class Person:
    name: str = field(kw_only=True)
    age: int = 0

# p = Person('nami', 18)
p = Person(name='nami', age=18)
print(p)
print(p.name, p.age)

# q = Person()
# print(q)
# print(q.name)


