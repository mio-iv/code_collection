import numpy as np
import matplotlib.pyplot as plt

x = np.linspace(-np.pi,np.pi,100)
y1 = np.sin(x)
y2 = np.cos(x)
y3 = np.tan(x)

fig,ax = plt.subplots(3,1,figsize=(8,6))

ax[0].plot(x, y1, label="Y=sinX", color="red")
ax[1].plot(x, y2, label="Y=cosX", color="blue")
ax[2].plot(x, y3, label="Y=tanX", color="green")

for i in range(3):
    ax[i].legend()
    ax[i].set_xlabel("x axis")
    ax[i].set_ylabel("y axis")

plt.tight_layout()
plt.show()

