'''
サポートベクターマシン（SVM）で分類・分析
データセットの詳細
説明変数：アヤメの特徴量
 レコード数： 150
 カラム数： 4

説明変数の各カラム構成：
sepal length (cm) がく片の長さ
sepal width (cm)  がく片の幅
petal length (cm) 花弁の長さ
petal width (cm) 花弁の幅

目的変数：アヤメの品種
setosaなら0
versicolorなら1
virginicaなら2

'''
import numpy as np
import matplotlib.pyplot as plt
from sklearn import svm, datasets, model_selection
# svmクラスはサポートベクターマシンのため
# model_selectionクラスはデータセットの加工に使用
 
# アヤメの計測データ
iris = datasets.load_iris()
 
# データセットをトレーニング用、テスト用に分割
X_train, X_test, y_train, y_test = model_selection.train_test_split(
    iris.data, iris.target, test_size=0.1
)
'''
X_train: トレーニング用の説明（特徴）行列（アヤメのがく片（Sepal）や花弁（Petal）の幅および長さ）
X_test: テスト用の説明（特徴）行列（アヤメのがく片（Sepal）や花弁（Petal）の幅および長さ）
y_train: トレーニング用の目的変数（アヤメの種類）
y_test: テスト用の目的変数
'''

# 学習
clf = svm.SVC()
clf.fit(X_train, y_train)
 
# 学習結果表示
print("Score : \t", clf.score(X_test, y_test))# スコア

# モデルの評価には、svmクラスのpredict()関数を使用
list(clf.predict(X_test))   # テストデータをモデルで評価した分類結果
list(y_test)                # 元々の目的変数（答え）


# list(clf.predict([[がく片の長さ, がく片の幅, 花弁の長さ,花弁の幅]]))
