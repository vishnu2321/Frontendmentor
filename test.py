from bs4 import BeautifulSoup
import requests
import pandas as pd

url = "https://en.wikipedia.org/wiki/World_population"
data = requests.get(url).text
soup = BeautifulSoup(data,'html5lib')

tables_list = soup.find_all('table')
table_index=-1
for index,table in enumerate(tables_list):
    if('Top ten most populous countries' in str(table)):
        table_index=index

print(tables_list[table_index].prettify())