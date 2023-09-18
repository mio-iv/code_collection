import numpy as np


a = np.array([[1,2,3],[4,5,6]])
print(a)
print(a.ndim)
print(a.size)
print(a.shape)
print(a.dtype)

zeros2no3 = np.zeros((2,3))
print(zeros2no3)

ones2no3 = np.ones((2,3))
print(ones2no3)

print(np.arange(10))
print(np.arange(1,10))
print(np.arange(0,10,2))
print(np.linspace(0,100,10))

b = np.arange(1,10)
print(b)
c = b.reshape(3,3)
print(c)
d = c.ravel()
print(d)

e = np.array([[1,2,3,4],[5,6,7,8]])
print(e)
print(e.T)
print(e.transpose())
print(e.reshape(4,2))


A = np.array([[1,2],[3,4]])
B = np.array([[2,4],[6,8]])

print(A)
print(B)

print(A+B)
print(A-B)
print(A*B)
print(A/B)
print(np.dot(A,B))
print(A.dot(B))

print(A.sum())
print(A.min())
print(A.max())
print(A.mean())
print(A.std())

print(A.sum())
print(A.sum(axis=0))
print(A.sum(axis=1))
