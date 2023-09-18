from distutils.dist import DistributionMetadata
from lib2to3.pgen2 import driver
from re import search
from selenium import webdriver
from selenium.webdriver.common.by import By

import time

def wait(word):
    time.sleep(1)
    print(word)


def mod_main():
    # driverの指定
    driver = webdriver.Chrome()

    try:
        driver.get("https://www.google.co.jp/")
        wait('A')

        search_box = driver.find_elements(By.ID, "input")
        wait('B')
        
        # search_box.send_keys("Python")
        print(search_box.__getattribute__('ID'))
        
        wait('C')

        search_button = driver.find_elements(By.NAME, 'BtnK')
        wait('D')
        

        search_button.click()
        wait('E')

        driver.close()

    except Exception:
        driver.close()
        print('NG.')


if __name__ == '__main__':
    mod_main()