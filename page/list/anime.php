<title>AntifansubID</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css">
<?php $start_time = microtime(true); ?>

<script type="text/javascript" src="/inc/rain.js"></script> 
<style>
  body { 
   background: black url("/antifansub/inc/a.png") no-repeat fixed center; 
 }
 
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
                 _   _ ______                    _     
     /\         | | (_)  ____|                  | |    
    /  \   _ __ | |_ _| |__ __ _ _ __  ___ _   _| |__  
   / /\ \ | '_ \| __| |  __/ _` | '_ \/ __| | | | '_ \ 
  / ____ \| | | | |_| | | | (_| | | | \__ \ |_| | |_) |
 /_/    \_\_| |_|\__|_|_|  \__,_|_| |_|___/\__,_|_.__/ 
                                  Your coins end here.
</pre></div>
<center>
<?php

echo '<font face=Consolas color=gold size=3>';
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "[<font color=green>d</font> : <b>(".date("d-M-Y", $tanggal).")</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "-> <font color=green>t</font> : <b>(". $jam.") "."</b> -> ";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<font color=white><b>Morning</font></b>]";
}
else if(($a>11) && ($a<=15))
{
echo ", Morning";}
else if (($a>15) && ($a<=18)){
echo ", Good day";}
else { echo ", <b> Night</b>";}
echo '</font>';
?>



<font face=Ubuntu size="2" color="white">
<center><br><div id="steal"><a href="/"><b>/home<b/></a>
<a href="page/list" rel="nofollow" target="_blank"><b>animelist</b></a>
<a href="?chart" rel="nofollow" target="_blank"><b>schedule</b></a></div><br>
</font>

<div class="koceng">
<font face="courier" size="3" color="gray">
<pre>
available params : <font color=red>?list, ?search, ?series</font>
</pre>
</div>
</font>


<form action="anime.php" method="get">
<input type="show" style="width:10%;" placeholder="series" name="q"><br>
</form>

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
  <div class="page">
<a href="/page?x=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=87"><span class="pg">Last</span></a> </div>
<div>
