import seaborn as sns
import matplotlib.pyplot as plt
import numpy as np
import pandas as pd

tips = pd.read_csv("../tips/tips.csv")
print(tips.head())

# =============================================================
# 棒グラフ
# fig, ax = plt.subplots(1,2, figsize=(12,4))
# sns.countplot(data=tips, x=tips["day"], ax=ax[0])
# sns.barplot(data=tips, x="day", y="total_bill", ax=ax[1])
# =============================================================
# ヒストグラム
# fig, ax = plt.subplots(1,2, figsize=(12,4))
# sns.displot(data=tips, x="total_bill", ax=ax[0])
# sns.distplot(a=tips["total_bill"], bins=20, ax=ax[0])
# =============================================================
# 線形回帰プロット
# fig, ax = plt.subplots(1,2, figsize=(12,4))
# sns.regplot(
#     data=tips, x="total_bill", y="tip", ax=ax[0], fit_reg=False
#     )   # fit_reg=Falseで直線が消える
# sns.regplot(
#     data=tips, x="total_bill", y="tip", ax=ax[1], scatter=False
#     )   # scatter=Falseで散布図が消える
# =============================================================

fig, ax = plt.subplots(1, 3, figsize=(15,5))
sns.countplot(data=tips, x="smoker", ax=ax[0])
sns.distplot(a=tips["total_bill"], bins=20, ax=ax[1], kde=False)
sns.regplot(data=tips, x="total_bill", y="tip", ax=ax[2], fit_reg=False)
plt.show()