from django.shortcuts import render
from django.http import HttpResponse
from datetime import datetime
from .models import item

# Create your views here.
def show_item(request,item_code):
    Item = item.objects.get(code=item_code)
    context = {'item':Item, }
    return render(request, 'item.html', context)