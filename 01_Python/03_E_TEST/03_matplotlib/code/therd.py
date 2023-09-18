import numpy as np
import matplotlib.pyplot as plt

x = np.linspace(0,10,20)
y = x**2
z = (x-1)**3
w = ((x-2)*(x-4))**2

# オブジェクト指向インターフェースの書き方
# ==================================================
# fig = plt.figure(figsize=(3,3))
# ax = fig.add_subplot(1,1,1) # 1行一列のaxesを作成し、1番目をaxとする

# ax.plot(x,y, label="y=x^2")
# ax.plot(x,z, label="z=(x-1)^3")
# ax.plot(x,w, label="w=((x-2)(x-4))^2")
# ax.set_title("title")
# ax.legend()
# plt.show()
# ==================================================
fig,ax = plt.subplots(1,3,figsize=(12,4))

ax[0].plot(x,y, label="y=x^2")
ax[1].plot(x,z, label="z=(x-1)^3")
ax[2].plot(x,w, label="w=((x-2)(x-4))^2")

for i in range(3):
    ax[i].legend()
    ax[i].set_xlabel("x axis")
    ax[i].set_ylabel("y axis")

plt.tight_layout()
plt.show()
# ==================================================
fig,ax = plt.subplots(2,2,figsize=(8,8))

ax[0,0].plot(x,y, label="y=x^2")
ax[0,1].plot(x,z, label="z=(x-1)^3")
ax[1,0].plot(x,w, label="w=((x-2)(x-4))^2")
plt.tight_layout()
plt.show()