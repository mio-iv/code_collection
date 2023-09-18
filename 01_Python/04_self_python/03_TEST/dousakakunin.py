import config
import pandas as pd
import os
from dotenv import load_dotenv
load_dotenv()

def mod_main():

    # root = os.path.dirname(__file__) 
    # file = os.path.join(root, "data/02/kokyaku_daicho.xlsx")
    file = os.environ["survey"]

    df = pd.read_csv(file, header=0)
    print('データサイズ：', len(df))
    print('columns', df.columns)
    print('index', df.index)
    print('='*60)
    print(df)


if __name__ == "__main__":
    mod_main()