# print("abc\ndef")

# print(r"abc\ndef")
class MyClass:
    _value = 300
    value = 300

    def __init__(self):
        self.__value = 200

    def method(self):
        print("アクセス可能")

    def _method(self): 
        print("アクセス不可")

    def getValue(self):
        print(self.__value)


myclass = MyClass()
myclass._method()