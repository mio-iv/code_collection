'''
線形回帰を使って機械学習
scilit-learn 第1個目
'''
import numpy as np
import matplotlib.pyplot as plt
from sklearn import linear_model, datasets
 
# ランダム値を生成しデータセットを用意
np.random.seed(0)
regdata = datasets.make_regression(100, 1, noise=20.0)
 
# 学習
lin = linear_model.LinearRegression()
lin.fit(regdata[0], regdata[1])
 
# 学習結果表示
'''
係数はlinear_modelインスタンスの「coef_」クラス変数で、
切片は「intercept_」クラス変数で参照
'''
print("Coefficients: \t", lin.coef_)# 係数
print("Intercept: \t", lin.intercept_)# 切片
print("Score : \t", lin.score(regdata[0], regdata[1]))# スコア
            # どの程度一致しているのかscore関数     
 
# グラフ表示
xr = [-2.5, 2.5]    # 境界?
plt.plot(xr, lin.coef_ * xr + lin.intercept_)
plt.scatter(regdata[0], regdata[1])
plt.show()