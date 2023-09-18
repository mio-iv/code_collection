from django.db import models

# Create your models here.
class item(models.Model):
    code = models.IntegerField()
    name = models.TextField()
    address = models.TextField()