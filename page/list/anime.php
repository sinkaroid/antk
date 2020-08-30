<title>AntifansubID</title>

<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<script type="text/javascript" src="inc/rain.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<?php
// curl jadwal
$start_time = microtime(true);
if(isset($_GET['chart'])){
require 'inc/jadwal.php';  #model
}

?>

<link rel="stylesheet" type="text/css" href="/inc/style.css">
<style>
   
    body {
  background: url(/inc/back.png) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  
}
 
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
   _         _   _           _                            _         
  /_\  _ __ | |_(_)___ _   _| |__  ___          /\ /\__ _| |_ ___   
 //_\\| '_ \| __| / __| | | | '_ \/ __|_____   / //_/ _` | __/ _ \  
/  _  \ | | | |_| \__ \ |_| | |_) \__ \_____| / __ \ (_| | || (_) | 
\_/ \_/_| |_|\__|_|___/\__,_|_.__/|___/       \/  \/\__,_|\__\___(_)
                      -Sin 2019 | codename: Kato
</pre></div></font>


</p>

<div class="anjing" style="width: 650px">
<font face=Ubuntu color=white size=2><div id="sis">
<i class="fa fa-user-circle" style="font-size:25px;color:white"></i>
<a href="/"><b>/kato<b/></a>
<a href="https://yin.kireisubs.org/" rel="nofollow" target="_blank"><b>/yin</b></a>
<a href="#" rel="nofollow" target="_blank"><b>/miyamori</b></a>
<a href="https://kumiko.kireisubs.org/" rel="nofollow" target="_blank"><b>/oumae</b></a>
<a href="https://sayuki.kireisubs.org/" rel="nofollow" target="_blank"><b>/sayuki</b></a>
<a href="https://nino.kireisubs.org/" rel="nofollow" target="_blank"><b>/nino</b></a><br><br>
<font color=gold size=2>(0ur core Sisters,an smol circle merged into antifansub and core scraper as well.)</font>
<hr width=70%>
<!-- <img src="https://i.imgur.com/7dqql2a.png" align="right" width="150" height="150"> -->
</div><p>

<center>
<?php

// class tentang

if(isset($_GET['about'])){
  echo '
  <font face=consolas color=white>
  this is opensource code, not affiliated with other vendor or victim itself, feel free to pull or issues, 
  <br>even steal it with change copyright idc, i just want make a simple parser and lightweight static routes.
  <p>
  <br> contributor: only me<br> mypower: <i>php7X,codeigniter,reactJS,nginx,and some pypi dependencies</i>
  <p>./eof</font>';  
  exit;
  } #or curl /page/?about

// multiple timestamp

echo '<i class="fa fa-clock-o" style="font-size:25px;color:white"></i><i class="flag-icon flag-icon-jp" style="font-size:20px"></i><font face=Ubuntu color=gold size=3>';
date_default_timezone_set('Asia/Tokyo'); 
echo ' Asia/Tokyo: ',date('M-d (H:i)');
print '</font>';
echo ' <font color=white size=5> || </font> ';
echo '<i class="fa fa-clock-o" style="font-size:25px;color:white"></i><i class="flag-icon flag-icon-id" style="font-size:20px"></i><font face=Ubuntu color=orange size=3>';
date_default_timezone_set('Asia/Jakarta'); 
echo ' Asia/jakarta: ',date('M-d (H:i)');
print '</font>';
?>


<font face=Ubuntu size="2" color="white">
<center><br><div id="steal"><a href="/"><b><i class="fa fa-rocket" style="font-size:25px;color:white"></i>/home<b/></a>
<a href="/page/list" rel="nofollow" target="_blank"><b><i class="fa fa-desktop" style="font-size:20px;color:white"></i>animelist</b></a>
<a href="/?chart" rel="nofollow" target="_blank"><b><i class="fa fa-globe" style="font-size:20px;color:white"></i>fullschedule</b></a>
<a href="/#popup1"><b><i class="fab fa-discord" style="font-size:20px;color:white"></i>Discordbots</b></a>
<a href="/?about" rel="nofollow" target="_blank"><b><i class="fa fa-bug" style="font-size:20px;color:white"></i>about</b></a>
</div><br>

<form action="/page/list/anime.php" method="get">
<i class="fa fa-terminal" style="font-size:20px;color:white"></i> kato@megumi:~ <input type="show" class="bordergaya" style="width:20%;" placeholder="search.." name="q">
</form>
</font>
</div>
<div id="sos">
<br><font size=2><i class="fa fa-sun-o" style="font-size:25px;color:white"></i>
<a href="?chart" rel="nofollow" target="_blank">📅current season:
<?php require $_SERVER['DOCUMENT_ROOT'].'/inc/api.php'; ?>
</a></font></div><br>
<hr width=10%>
<div class="fetish">
<div class="row">
    

<?php

require 'search.php';


if(isset($_GET['q'])){

  $babi = $_GET['q'];
  $bangsat = 'https://anitoki.com/?s=';
  $kontol = $bangsat . $babi; // site.com/search?q="query" lo jadi ini dipecah jadi 2
  $curl = curl_init($kontol); 
  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
  $target = curl_exec($curl); 
  if(curl_errno($curl))
  {
    echo 'error: ' . curl_error($curl);
    exit;
  }
   
  curl_close($curl);
  
  
  $tag = '/<div class="rapi">(.*?)<div class="pagination">/s';
  if ( preg_match($tag, $target, $udah) )
  
    
      echo 'searched > <font color=white>',$babi,'</font><br><br>',
      wordFilter($udah[0]);
  else 
      print "error";
      
  }
  
?>
 
