from django.db import models

# Create your models here.
'''
クラス名→テーブル名、クラス変数→カラム名、代入するオブジェクト→データ型
カラム属性や制約条件→オプションとして指定
※デフォルトで「NOT NULL制約」が有効
'''
class item(models.Model):
    code = models.IntegerField()
    name = models.TextField()
    price = models.IntegerField()