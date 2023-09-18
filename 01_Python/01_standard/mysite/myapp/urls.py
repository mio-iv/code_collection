from django.urls import path
# from django.conf.urls import url
from . import views
'''
URLのパターンと表示したいViewの組み合わせを
「path(...)」関数を使って定義し、
「urlpatterns」リストに追加
'''
urlpatterns = [
    path('' , views.index, name = 'index' ),
    path('foo' , views.foo, name = 'foo' ), 
    path('hello' , views.hello, name = 'hello' ), 
    path('item/<int:item_code>', views.show_item, name='show_item'), # 9-2追加

]