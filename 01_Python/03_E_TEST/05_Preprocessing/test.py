# ライブラリのインポート
import numpy as np
import pandas as pd
from matplotlib import pyplot as plt
import seaborn as sns

# warning を非表示にする
import warnings
warnings.simplefilter('ignore')

train = pd.read_csv("../titanic/train.csv")
test = pd.read_csv("../titanic/test.csv")

# print(train.info())
# print(train.head())

# print(train.isnull().sum())
# print(train.notnull().sum())


sns.boxenplot(data=train, x=train["Age"])
plt.show()