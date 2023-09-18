from django.shortcuts import render
from django.http import HttpResponse   #追加
from datetime import datetime
from .models import item        # 9-2追加

# Create your views here.
###以下追加###
def index(request):
    html = "<h1>myappのウェルカムページです</h1>"
    return HttpResponse(html)
 
def foo(request):
    html = "<h1>fooが指定されたときのページです</h1>"
    return HttpResponse(html)

def hello(request):                         # 9-1回追加
    context = {
        'datetime': datetime.now(),
        'message': 'Templateを使ってみよう！',
    }   # ディクショナリー型変数で
    return render(request, 'index.html', context)
    # Templateに処理を渡す場合は、
    # 「return render(request, 'テンプレートファイル名')」と、
    # render( )を返す

def show_item(request, item_code):
    # item_code,で指定された商品コードでデータベースを検索
    Item = item.objects.get(code=item_code)
    context = {'item':Item, }
    return render(request, 'item.html', context)