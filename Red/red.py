#!python
#!C:\Python37\python.exe
from bs4 import BeautifulSoup
import requests
from colorama import Fore, Style

link = []
no = 1
page = 1
fansub = 'https://anitoki.web.id/'


def first():
    global no # pylint: disable=global-statement
    source = requests.get(fansub).text

    soup = BeautifulSoup(source, 'html.parser')
    for title in soup.find_all('div', class_='content'):
        print("(",no,")", title.h2.text, title.find_all('p')[1].getText())
        no += 1
        link.append(title.h2.a['href'])
    menu()


def menu():
    print("Next page (n) | Previous page (p)")
    pilih = input("Select : ")
    if pilih == "n" or pilih == "N":
        next_page()
    elif pilih == "p" or pilih == "P":
        prev_page()
    else:
        get_data(int(pilih) - 1)


def next_page():
    global page # pylint: disable=global-statement
    global link # pylint: disable=global-statement
    global no # pylint: disable=global-statement
    link = []
    page += 1
    no = 1
    c = requests.get(fansub+'page/' + str(page)).text

    d = BeautifulSoup(c, 'html.parser')


    for title in d.find_all('div', class_='content'):
        print("(", no, ")", title.h2.text, title.find_all('p')[1].getText())
        no += 1
        link.append(title.h2.a['href'])
    menu()


def prev_page():
    global page # pylint: disable=global-statement
    global link # pylint: disable=global-statement
    global no # pylint: disable=global-statement
    page -= 1
    no = 1
    if page == 0:
        print("This is First Page")
        first()
    else:
        link = []
        a = requests.get(fansub+'page/'+str(page)).text
        b = BeautifulSoup(a, 'html.parser')

        for title in b.find_all('div', class_='content'):
            print("(", no, ")", title.h2.text, title.find_all('p')[1].getText())
            no += 1
            link.append(title.h2.a['href'])
        menu()


def get_data(pilihan):
    a = requests.get(link[pilihan]).text
    b = BeautifulSoup(a, 'html.parser')

    for download in b.find_all('div', class_= 'smokeddl'):
        print(download.find('div', class_="smokettl").text)
        for dl_link in download.find_all('div', class_="smokeurl"):
            url_link = []
            if dl_link.strong is None:
                continue
            print(dl_link.strong.text)
            for url in dl_link.find_all('a'):
                url_link.append(url['href'])
            print(url_link)

print(Fore.BLUE)
print("""

  ____          _          _          _   _ 
 |  _ \ ___  __| |        / \   _ __ | |_(_)
 | |_) / _ \/ _` | _____ / _ \ | '_ \| __| |
 |  _ <  __/ (_| ||_____/ ___ \| | | | |_| |
 |_| \_\___|\__,_( )   /_/   \_\_| |_|\__|_|
                 |/                 -sin                                               
""")
print(Style.RESET_ALL)
first()