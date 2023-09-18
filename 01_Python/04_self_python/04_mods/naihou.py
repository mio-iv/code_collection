'''
リスト以外の内包表記
'''
number = [1,2,3]
dict_ = {x:x*10 for x in number}
print(dict_)


def greeding(name:str) -> str:
    print(f'type(name){type(name)}')
    return f"Hello {name}"

text: str = 123
print(greeding(text))
print(type(text))


a, b = 'aiueo', 'eeeee'
print(f"{a=},{b=}")