'''
オブジェクトの型でパターンマッチ


'''

from dataclasses import dataclass

@dataclass
class Beer:  # Beer("IPA", "Pint")
    style: str
    size: str

@dataclass
class Food:  # Food("nuts")
    name: str

@dataclass
class Water:  # Water(4)
    number: int


order = Beer("IPA", "L")
match order:
    case Beer(style=STYLE, size=SIZE):
        print(f"{STYLE}を{SIZE}サイズでください。")
    case _:
        print("注文していません")