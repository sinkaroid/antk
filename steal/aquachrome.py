from threading import Timer
from time import sleep

import subprocess
import platform

# Hint 1: to enable F11 use --start-fullscreen instead of --kiosk, otherwise Alt+F4 to close the browser   
# Hint 2: fullscreen will only work if chrome is not already running

platform_browser = {
'Windows': r'"C:\Program Files (x86)\Google\Chrome\Application\chrome.exe" --kiosk file:///C:/Python37/makise.htm',
'Linux' : ['/usr/bin/chromium-browser', '--kiosk', 'file:///C:/Python37/makise.htm']
}

browser = None
def open_browser():
    global browser

    platform_name = platform.system()

    if platform_name in  platform_browser:        
        browser = subprocess.Popen(platform_browser[platform_name])
    else:
        print(":-(")

Timer(1, open_browser).start() # delayed start, give e.g. your own web server time to launch

sleep(20) # start e.g. your python web server here instead

browser.kill()