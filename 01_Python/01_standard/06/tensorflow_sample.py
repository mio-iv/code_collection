'''
import tensorflow as tf
# MNISTデータセットを用意して、0〜255の整数値を0〜1の小数に変換
mnist = tf.keras.datasets.mnist
(x_train, y_train), (x_test, y_test) = mnist.load_data()
x_train, x_test = x_train / 255.0, x_test / 255.0
 
「x_train」はトレーニング用画像データ
「y_train」はトレーニング用ラベルデータ


# モデルの構築
model = tf.keras.models.Sequential([
    tf.keras.layers.Flatten(input_shape=(28, 28)),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dropout(0.2),
    tf.keras.layers.Dense(10)
])


# 画像を分類するためのニューラルネットワークのモデルの構築
model = tf.keras.models.Sequential([
  tf.keras.layers.Flatten(input_shape=(28, 28)),
# 28×28の2次元データを「Flatten()」により1次元配列に変換したものを最初の入力層に使用
  tf.keras.layers.Dense(128, activation='relu'),
# 128ノードから成り、活性化関数として「relu」を設定
  tf.keras.layers.Dropout(0.2),
# 直前の層に対して、ドロップアウト率（0.2）を設定して過学習を防ぎ、モデルの精度を向
  tf.keras.layers.Dense(10)
# 出力層。0～9のどの数字かを判定する
])
 
# モデルの前処理
predictions = model(x_train[:1]).numpy()
predictions
tf.nn.softmax(predictions).numpy()
 
# 損失関数
loss_fn = tf.keras.losses.SparseCategoricalCrossentropy(from_logits=True)
loss_fn(y_train[:1], predictions).numpy()
 
# モデルのコンパイル
model.compile(optimizer='adam',
    loss=loss_fn,
    metrics=['accuracy'])
 
# ログを出力するためのコールバック関数を定義
tensorboard_callback = tf.keras.callbacks.TensorBoard(log_dir="logs")
 
# モデルのトレーニング
model.fit(x_train, y_train, epochs=5,callbacks=[tensorboard_callback])
 
# モデルの評価
model.evaluate(x_test, y_test, verbose=2)


'''