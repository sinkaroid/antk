# Anti
![](https://img.shields.io/badge/codename-kato-hotpink) ![](https://img.shields.io/badge/php-%3E%3D5.3.9-blue.svg) ![](https://img.shields.io/pypi/pyversions/3) ![](https://img.shields.io/github/last-commit/sinkaroid/antifansub)  

`composer require bib/antifansub`  

**AntiID** - i create a Trash tools do autobypass,scrap,decrypt and find the final url (*indonesia Fansubber*), then we parsing it to our repo, I choose some of the good among them(maybe)  

* Nginx 
* CLi  

```
$ cd Antifansub/steal  
$ ./anti
```  

## argument  
- `?home` main  
- `page/?x={1..99}` page  
- `page/list/anime.php?q=$argv[0]` query  
- `?list` series
- `?chart` fullschedule (based on JST)  


```php
require 'inc/str.php'; #main
require_once(realpath(dirname(__FILE__) . '/../inc/str.php')); #multiple pagecontent

```  
  
  
## Discord
integerate this repo to hookbot  
![](https://1.bp.blogspot.com/-g8H_KN6i_E0/XWENevaokLI/AAAAAAAAJqE/6Ri4bWy5oHENFyNI27FE_aXVYf5T_8TsgCLcBGAs/s1600/Screenshot_105.png)

```
$ cd Antifansub/page/feed  
$ code index.php #vscode  
```  
```php
function sed($t)
{
    $sed = $t;
    $sed = str_replace('https://kato.kireisubs.com/?p=', 'yoursite/steal/?id=',    
	$sed);
	
    return $sed;
} # if necessary or u can use your own rss fetcher
```
## License
[MIT](https://choosealicense.com/licenses/mit/)
