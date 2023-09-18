import config
import pandas as pd

def mod_main():
    '''各種使い方例'''
    txt = config.Txt('temp.txt')
    body = txt.getbody()
    print(body)

    df1 = pd.DataFrame(
        data = {
                '列1': [10, 20, 30, 40], 
                '列2': [50, 60, 70, 80],
                '列3': ['a', 'b', 'c', 'd']
            }
    )
    print(df1)


if __name__ == "__main__":
    mod_main()