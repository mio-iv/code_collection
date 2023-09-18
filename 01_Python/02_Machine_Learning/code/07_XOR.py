# AND,NAND,OR,そしてXOR
import numpy as np

def mod_and(p1, p2):
    imput = np.array([p1, p2])
    weight = np.array([1, 1])
    bias = -1.5
    if np.sum(weight*imput)+bias<=0:
        return 0
    else:
        return 1
    

def mod_nand(p1, p2):
    imput = np.array([p1, p2])
    weight = np.array([-1, -1])
    bias = 1.5
    if np.sum(weight*imput)+bias<=0:
        return 0
    else:
        return 1


def mod_nand_2(p1, p2):
    imput = np.array([p1, p2])
    weight = np.array([1, 1])
    bias = -1.5
    if np.sum(weight*imput)+bias<=0:
        return 1
    else:
        return 0


def mod_or(p1, p2):
    imput = np.array([p1, p2])
    weight = np.array([1, 1])
    bias = 0
    if np.sum(weight*imput)+bias<=0:
        return 0
    else:
        return 1

def mod_xor(p1, p2):
    middle_class1 = mod_nand_2(p1, p2)
    middle_class2 = mod_or(p1, p2)
    y = mod_and(middle_class1, middle_class2)
    return y


data =  [[0,0],[0,1],[1,0],[1,1]]
print("論理積")
for i in data:
    print(i, mod_and(i[0],i[1]))

print("否定論理")    
for i in data:
    print(i, mod_nand(i[0],i[1])) 

print("新しい否定論理積")    
for i in data:
    print(i, mod_nand_2(i[0],i[1])) 

print("論理和")    
for i in data:
    print(i, mod_or(i[0],i[1])) 

print("排他的論理和") 
for i in data:
    print(i, mod_xor(i[0],i[1])) 