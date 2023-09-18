from distutils.dist import DistributionMetadata
from lib2to3.pgen2 import driver
from re import search
from selenium import webdriver
from selenium.webdriver.common.by import By

import time

def mod_main():
    # driverの指定
    driver = webdriver.Chrome()

    try:
        driver.get('https://finance.yahoo.co.jp/stocks/ranking/up')

        print(driver.find_element("//*[@id='item']/div/table/tbody/tr[1]")) # xpathでの指定
        element = driver.find_elements(By.CLASS_NAME, '_3C-qA9GA')          # classでの指定
        print(type(element))
        print(element[0].get_attribute)
        print(element[0].text)
        print(element[0].get_attribute("href"))

        driver.close()

    except Exception:
        driver.close()
        print('NG.')


if __name__ == '__main__':
    mod_main()