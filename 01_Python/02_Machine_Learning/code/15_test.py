import json 

with open('myFamily.json',encoding='utf-8') as f: 
    Family_json = json.loads(f.read())

print(Family_json)

# 誰かの父
for item in Family_json['父']:
    print(list(item.keys()))

# 〇〇は誰の父か?
# ======================================
from kanren import * # 論理プログラミング用ライブラリ
# 父である、という関係を定義
is_father = Relation()

for item in Family_json['父']:
    facts(is_father, (list(item.keys())[0], list(item.values())[0]))

x = var()
result_all = run(0, x, (is_father, 'マスオ', x))

for result in result_all:
    print(result)
# ======================================


