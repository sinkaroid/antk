<title>AntifansubID</title>

<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<script type="text/javascript" src="inc/rain.js"></script> 
<?php
// curl jadwal
$start_time = microtime(true);
if(isset($_GET['chart'])){
require 'inc/jadwal.php';  #model
}

?>

<link rel="stylesheet" type="text/css" href="inc/style.css">
<style>
  body { 
   background: black url("inc/a.png") no-repeat fixed center; 
 }
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
                 _   _           _         
     /\         | | (_)         | |        
    /  \   _ __ | |_ _ ___ _   _| |__  ___ 
   / /\ \ | '_ \| __| / __| | | | '_ \/ __|
  / ____ \| | | | |_| \__ \ |_| | |_) \__ \
 /_/    \_\_| |_|\__|_|___/\__,_|_.__/|___/
                      -Sin 2019 | codename: Kato
</pre></div></font>
<font face=Ubuntu color=gray>think different to get same things isn't different enough.</font><p>
<center>
<?php

// class tentang

if(isset($_GET['about'])){
  echo '
  <font face=consolas color=green>
  this is opensource code, not affiliated with other vendor or victim itself, feel free to pull or issues, 
  <br>even steal it with change copyright idc, i just want make a simple parser and lightweight static routes.
  <p>
  <br> contributor: only me<br> mypower: <i>php7X,codeigniter,reactJS,nginx,and some pypi dependencies</i>
  <p>./eof</font>';  
  exit;
  } #or curl /page/?about

// multiple timestamp

echo '<font face=Ubuntu color=gold size=3>';
date_default_timezone_set('Asia/Tokyo'); 
echo 'JST: ',date('M-d (H:i)');
print '</font>';

echo ' <font color=white size=5> // </font> ';

echo '<font face=Ubuntu color=orange size=3>';
date_default_timezone_set('Asia/Jakarta'); 
echo 'Asia/jakarta: ',date('M-d (H:i)');
print '</font>';
?>


<font face=Ubuntu size="2" color="white">
<center><br><div id="steal"><a href="/"><b>/home<b/></a>
<a href="page/list" rel="nofollow" target="_blank"><b>animelist</b></a>
<a href="?chart" rel="nofollow" target="_blank"><b>fullschedule</b></a>
<a href="?about" rel="nofollow" target="_blank"><b>about</b></a>
</div><br>

<br>
<form action="page/list/anime.php" method="get">
query : <input type="show" class="bordergaya" style="width:10%;" placeholder="series" name="q"><br>
</form>
</font>


<?php
require 'inc/str.php'; #model

$curl = curl_init('https://anitoki.web.id/'); //?rest_route= , use that if can't fetch latest content
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$regex = '/<div class="rapi">(.*?)<div class="pagination">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center><br><font face=Ubuntu color=gold>',wordFilter($list[0]); 
else 
    print "Not found"; 
    
 ?>

<center>
<div class="dog">
<div class="page">
<a href="/page?x=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=87"><span class="pg">Last</span></a> </div>
<div>
</div></div>
<br>
 <div class="intro">
<font color=crimson face=consolas size=2>
<b>&copy; Sin,</b>
(<a href="inc/info.php" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="2" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/anti</font>
</font>
</div>   