import numpy as np
import matplotlib.pyplot as plt

x = np.linspace(0,10,20)
y = x**2
z = (x-1)**3
w = ((x-2)*(x-4))**2

# ======================================================

# plt.figure(figsize=(10,5))
# plt.plot(x,y, label="y=x^2")
# plt.plot(x,z, label="z=(x-1)^3")
# plt.plot(x,w, label="w=((x-2)(x-4))^2")
# plt.legend()
# plt.show()

# ======================================================

plt.figure(figsize=(12,4))

plt.subplot(1,3,1)
plt.plot(x,y, label="y=x^2")
plt.legend()

plt.subplot(1,3,2)
plt.plot(x,z, label="z=(x-1)^3")
plt.legend()

plt.subplot(1,3,3)
plt.plot(x,w, label="w=((x-2)(x-4))^2")
plt.legend()

plt.tight_layout()  # グラフ同士の重なりを防ぐ
plt.show()

# ======================================================

