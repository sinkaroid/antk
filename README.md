# Anti
[![CodeFactor](https://www.codefactor.io/repository/github/sinkaroid/anti/badge)](https://www.codefactor.io/repository/github/sinkaroid/anti) [![](https://img.shields.io/packagist/php-v/curl/curl)](https://packagist.org/packages/curl/curl) [![](https://img.shields.io/github/commits-since/sinkaroid/anti/post1)](https://github.com/sinkaroid/anti/tree/master) [![Build Status](https://travis-ci.com/sinkaroid/Anti.svg?branch=master)](https://travis-ci.com/sinkaroid/Anti)  

### without deployment:
----
     $ pip install -r requirements.txt 
     $ cd Red 
     $ ./red.py

### apache|nginx:
```php
require 'rest/const0.php'; #first_route[0]
require_once(realpath(dirname(__FILE__) . '/../inc/str.php')); 
//...do here
require 'rest/const1.php'; #[1]
```  
## params:  

- `?home` == /
- `page/?x={1..99}` == multiplepage
- `/list/anime.php?q=$argv[0]` == query
- `?list` == allseries
- `?chart` == fullschedule  

## hooks
![](https://i.imgur.com/eoQ0zfN.png)