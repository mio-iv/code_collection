from kivy.app import App
from kivy.uix.widget import Widget
from kivy.uix.label import Label
from kivy.properties import StringProperty

from kivy.config import Config
Config.set('graphics', 'width', '200')
Config.set('graphics', 'height', '500')

from kivy.core.text import LabelBase, DEFAULT_FONT # 追加
LabelBase.register(DEFAULT_FONT, 'ume-pgc4.ttf')

class TextWidget(Widget):
    text = StringProperty() # プロパティ追加

    def __init__(self, **kwargs):
        super(TextWidget, self).__init__(**kwargs)
        self.text = ''

    def buttonClicked(self):
        self.text = 'ボタンが押されました'
        
class TestApp(App): # Appクラスのサブクラスを定義
    # def build(self):    # サブクラスの中ではWidgetインスタンスを返す、build( )関数を実装
    #     return Label(text='Hello World')
    def __init__(self, **kwargs):
        super(TestApp, self).__init__(**kwargs)
        self.title = 'greeting'

    def build(self):
        return TextWidget()

TestApp().run() # サブクラスをインスタンス化しrun( )メソッドを呼び出す
