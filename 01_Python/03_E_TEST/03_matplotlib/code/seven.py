import matplotlib.pyplot as plt
import numpy as np
import pandas as pd

data = pd.read_csv("../tips/tips.csv")
tips = pd.DataFrame(
    data=data,
    index=data.index,
    columns=data.columns,
)

tips_male = tips[tips["sex"]=="Male"][["total_bill","tip"]]
tips_female = tips[tips["sex"]=="Female"][["total_bill","tip"]]

fig, ax = plt.subplots(2,1, figsize=(8,6))

ax[0].scatter(x=tips_male["total_bill"], y=tips_male["tip"], 
              color="blue", label="male"
            )
ax[1].scatter(x=tips_female["total_bill"], y=tips_female["tip"], 
              color="red", label="female"
            )

for i in range(2):
    ax[i].set_xlabel("total_bill")
    ax[i].set_ylabel("tip")
    ax[i].legend()

plt.tight_layout()
plt.show()