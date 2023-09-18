import pandas as pd
import numpy as np

df = pd.DataFrame({
    'age': [10,np.nan,15,18],
    'hight': [130,140,160,175],
    'gender': ["M", "M", "F", "F"],
    'city': ["tpkyo", np.nan, "osaka", "nagoya"]
})

print(df)
print(df.isnull().sum())

df_temp1 = df.dropna()
print(df_temp1)

df_temp2 = df.fillna(df['age'].mean())
print(df_temp2)