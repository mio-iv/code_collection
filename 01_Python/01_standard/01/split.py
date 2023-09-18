import re

# src_str = "Words, words, words." 
# pattern = r"\s+"
# # 「\s」は空白文字、「+」は1文字以上を意味する正規表現
# dst_list = re.split(pattern, src_str)
# print(dst_list)

string = "It is fine today."
pattern = re.compile(r"[a-zA-Z]+")
# パターンオブジェクトを生成
match_list = re.findall(pattern,string)
print(match_list)

