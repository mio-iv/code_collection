# x = [1,2,3]
# x.append(4)
# print(x[2:4])
# import numpy as np
# a = np.array(
#     [
#     [1,2,3],
#     [4,5,6],
#     [7,8,9]
#     ]
# )

# print(np.sum(a, axis=0))
# print(np.sum(a, axis=1))
import pandas as pd
import numpy as np

df = pd.DataFrame({
    'age': [10,12,15,18],
    'hight': [130,140,160,175],
    'gender': ["M", "M", "F", "F"],
    'city': ["tpkyo", "koube", "osaka", "nagoya"]
})

print(df[df['age']>13][['hight','gender']])
