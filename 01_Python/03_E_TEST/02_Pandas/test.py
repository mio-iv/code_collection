import pandas as pd


df = pd.DataFrame({
    'age': [10,12,15,18],
    'hight': [130,140,160,175],
    'gender': ["M", "M", "F", "F"],
    'city': ["tpkyo", "koube", "osaka", "nagoya"]
})

print(df.info())
print(df.head(2))
print(df.index)
print(df.columns)

df.index = ["hana", "yuki", "kengo", "taro"]
df = df.rename(
    columns={"gender":"sex"},
    index={"taro":"ziro"}
    )
df['city'] = ["tpkyo", "koube", "osaka", "nagoya"]

print(df)

df = df.drop(columns="gender")

print(df.loc['yuki','hight'])
print(df.loc[:, ['age', 'gender']])
print(df[df['age']>15])
print(df.loc[df['hight']>150])

df = df.sort_values('age', ascending=False)

print(df)
print(df['gender'].value_counts())
print(df.groupby('gender').max())

print(df.loc[:,'hight'].mean())
print(df.loc[:,'hight'].max())
print(df.loc[:,'hight'].min())

df['hight'] += 10

print(df)
