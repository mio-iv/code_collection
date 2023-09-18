from distutils.dist import DistributionMetadata
from lib2to3.pgen2 import driver
from re import search
from selenium import webdriver
import time

def mod_main():
    # driverの指定
    driver = webdriver.Chrome()
    
    driver.get('https://finance.yahoo.co.jp/stocks/ranking/up')
    print(driver.current_url)
    print(driver.title)
    
    print(driver.find_element("//*[@id='item']/div/table/tbody/tr[1]")) # xpathでの指定
    print(driver.find_element("_3C-qA9GA"))                             # xpathでの指定
    print(driver.find_element_by_class_name("_3C-qA9GA"))

    print(driver.page_source)

    search_box = driver.find_element_by_name('q')
    search_box.send_keys('マカロンの作り方')
    search_box.submit()
    time.sleep(2)
    

if __name__ == '__main__':
    mod_main()