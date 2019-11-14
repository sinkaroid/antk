# Anti
[![CodeFactor](https://www.codefactor.io/repository/github/sinkaroid/anti/badge)](https://www.codefactor.io/repository/github/sinkaroid/anti) ![](https://img.shields.io/badge/php-%3E%3D5.3.9-blue.svg)  

## parameter  
- `?home` main  
- `page/?x={1..99}` page  
- `page/list/anime.php?q=$argv[0]` query  
- `?list` series
- `?chart` fullschedule (based on JST)  


```php
require_once(realpath(dirname(__FILE__) . '/../inc/str.php')); 
```  

## Discord
integrate to hookbot  
![](https://1.bp.blogspot.com/-g8H_KN6i_E0/XWENevaokLI/AAAAAAAAJqE/6Ri4bWy5oHENFyNI27FE_aXVYf5T_8TsgCLcBGAs/s1600/Screenshot_105.png)  

```php
function sed($t)
{
    $sed = $t;
    $sed = str_replace('https://kato.kireisubs.com/?p=', 'yoursite/steal/?id=',    
	$sed);
	
    return $sed;
} # if necessary or u can use your own rss fetcher
```

