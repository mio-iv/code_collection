from django.shortcuts import render
from django.http import HttpResponse   #追加

# Create your views here.   文字コードを「UTF-8」にすること
def index(request):
    html = "<h1>練習問題です</h1>"
    return HttpResponse(html)