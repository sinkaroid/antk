# Anti
[![CodeFactor](https://www.codefactor.io/repository/github/sinkaroid/anti/badge)](https://www.codefactor.io/repository/github/sinkaroid/anti) [![](https://img.shields.io/packagist/php-v/curl/curl)](https://packagist.org/packages/curl/curl) [![](https://img.shields.io/github/commit-activity/m/sinkaroid/anti)](https://github.com/sinkaroid/anti/tree/master)  

## parameter  
- `?home` // index
- `page/?x={1..99}` // multiplepage
- `page/list/anime.php?q=$argv[0]` // query
- `?list` // allseries
- `?chart` // fullschedule (based on JST)  


```php
require_once(realpath(dirname(__FILE__) . '/../inc/str.php')); 
```  
```php
// if necessary or u can use your own rss fetcher
header('Content-Type: text/plain');
$url = 'victims/?feed=rss2';

function sed($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('victims/?p=', 'yours/steal/?id=', $ambilkata);
    return $sed;
}
echo sed(file_get_contents($url));
```  
## integrate to hook/bot  
![](https://i.imgur.com/1Ti7qmh.png)  

