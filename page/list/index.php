<title>antifansub | animeList</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<style>

 .toto {
	text-align: center;
  }


  body { 
   background: black url("/inc/bg.png") no-repeat fixed center; 
 }
 a {
   color: green;
 }

 .sino {
   margin: auto;
   background-color: #655f64;
   width: 50%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

 .kotak {
   margin: auto;
   background-color: #655f64;
   width: 40%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

 .infox {
  margin: auto;
   background-color: #ffffff;
   width: 40%;
   
   padding: 20px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

 .koceng {
  display: inline-block;
  text-align: left;
 }
 
 .intro {
   margin: auto;
   background-color: #f7f3f3;
   width: 30%;
   
   padding: 10px;
   -moz-border-radius: 5px;
	 -webkit-border-radius: 20px;
 }

 
  </style>

<?php
echo '<font face=Ubuntu color=green>
<center>[animelist]</center><p>
<div class="infox">';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;
   
    $ambilkata = str_replace('', '', $ambilkata);


    //openurl
       //openurl
      
       $ambilkata = str_replace('href="', 'href="/page/list/series.php?id=', $ambilkata);
       $ambilkata = str_replace('" rel="', '" rel=', $ambilkata);
       $ambilkata = str_replace('<a href="', '<a href="/steal/?id=', $ambilkata);
    $ambilkata = str_replace('https://anitoki.web.id/?anime=', '', $ambilkata);
    
    return $ambilkata;
}
$curl = curl_init('https://anitoki.web.id/?page_id=602'); //victim

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

$judul = '/<div id="abtext">(.*?)<div class="navigation">/s';
if ( preg_match($judul, $page, $list) )
	
echo wordFilter($list[1]);
else 
    print "Not found"; 

?>
</div>
<?php
$dom = new \DOMDocument();
@$dom->loadHTML($page); // or @$dom->loadHTMLFile($filename); if providing filename rather than actual HTML content

$count = $dom->getElementsByTagName("li")->length;
echo '<br><center>Founded <b>',$count,' </b>AnimeDB</center>';

?>
<br><br>
<center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/anti</font>
</font>
</div>   