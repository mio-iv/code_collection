import pandas as pd
import numpy as np

df1 = pd.DataFrame({
    'age': [10,12,15,18],
    'hight': [130,140,160,175],
    'gender': ["M", "M", "F", "F"],
    'city': ["tpkyo", "koube", "osaka", "nagoya"]
})
print(df1.info())


df2 = pd.DataFrame({
    'age': [10,np.nan,15,18, 30],
    'hight': [130,140,160,175, 165],
    'gender': ["M", "M", "F", "F", "M"],
    'city': ["tpkyo", np.nan, "osaka", "nagoya"]
})
print(df2.info())

print(df1[df1['age']>14][['hight', 'gender']])