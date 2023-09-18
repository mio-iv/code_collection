'''変数への代入と変数の使用を同時に行える
'''

array = [1,2,3,4,5]
if (n := len(array)) > 3:
    print(n)

f = open("sample.txt")
while text := f.read():
    print(text)


data = range(10)
new_list = [
    y for x in data if (y := x*2) > 1
]
print(data)
print(new_list)