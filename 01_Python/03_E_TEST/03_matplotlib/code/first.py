import matplotlib.pyplot as plt

plt.figure(figsize=(4,4))
x = [0,2,4,6,8]
y = [0,6,12,24,48]

plt.plot(x,y,label="graph")
plt.legend()
plt.show()