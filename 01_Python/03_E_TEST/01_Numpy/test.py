import numpy as np

a = np.array([1,2,3,4,5,6,7,8,9,10])

print(a)
print(a[3])
print(a[-2])
print(a[:3])
print(a[1:3])
print(a[[0,3]])

b = np.array([
    [1,2,3,4,5],
    [6,7,8,9,10],
    [11,12,13,14,15],
    [16,17,18,19,20]
    ])

print(b)
print(b[1,])
print(b[3:])
print(b[3,2])
print(b[-1,1])

# np.where(<条件文>,<真の場合の値>, <偽の場合の値>)
print(np.where(b%2==0, 1, 0))
print(b[1:3,1:3])

aa = np.array([[1,2,3],[4,5,6],[7,8,9]])
# axisに関して
print(aa)
print(aa.sum())
print(np.sum(aa,axis=0))
print(np.sum(aa,axis=1))