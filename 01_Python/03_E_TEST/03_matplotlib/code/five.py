import matplotlib.pyplot as plt
import numpy as np
import pandas as pd

data = pd.read_csv("../tips/tips.csv")
tips = pd.DataFrame(
    data=data,
    index=data.index,
    columns=data.columns,
)
# print(tips.head())

# ===========================================
# x = range(4)
# x_label = tips.day.value_counts().keys()
# y = tips.day.value_counts().values

# plt.figure(figsize=(4,4))
# plt.bar(x, y, tick_label=x_label)
# plt.show()
# ===========================================
# とある一つのデータがどれくらいの割合存在するか
# plt.figure(figsize=(4,4))
# plt.pie(tips.day.value_counts(),    # 表示するデータ
#         autopct="%.1f%%",   # 表示形式。%.3f%%とすれば小数第3位まで表示
#         labels=tips.day.value_counts().keys() # 各データのラベル
#         )
# plt.show()
# ===========================================
# ヒストグラム plt.hist():データが取る得る値の様子を確認したい
# plt.figure(figsize=(8,4))
# plt.hist(
#     tips.total_bill, bins=20, color="green" # total_billは合計の金額。
# )
# plt.xlabel("total_bill")
# plt.ylabel("counts")
# plt.title("histogram of total bill")
# plt.show()
# ===========================================
# 2変数の関係を確認したい
plt.figure(figsize=(8,4))
plt.scatter(x=tips["total_bill"], y=tips["tip"])
plt.xlabel("total_bill")
plt.ylabel("tip")
plt.show()