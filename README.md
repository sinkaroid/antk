# Anti
[![CodeFactor](https://www.codefactor.io/repository/github/sinkaroid/anti/badge)](https://www.codefactor.io/repository/github/sinkaroid/anti) [![](https://img.shields.io/packagist/php-v/curl/curl)](https://packagist.org/packages/curl/curl) [![](https://img.shields.io/github/commits-since/sinkaroid/anti/post1)](https://github.com/sinkaroid/anti/tree/master) [![Build Status](https://travis-ci.com/sinkaroid/Anti.svg?branch=master)](https://travis-ci.com/sinkaroid/Anti)  
## params  
```php
require_once(realpath(dirname(__FILE__) . '/../inc/str.php')); 
```  
- `?home` // index
- `page/?x={1..99}` // multiplepage
- `page/list/anime.php?q=$argv[0]` // query
- `?list` // allseries
- `?chart` // fullschedule (based on JST)  

## hooks
![](https://i.imgur.com/tg0F1sY.png)