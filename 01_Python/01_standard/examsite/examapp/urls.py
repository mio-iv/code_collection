from django.urls import path
from . import views

urlpatterns = [
    path('item/<int:item_code>' , views.show_item, name = 'show_item' ),
]