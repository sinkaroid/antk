<title>Antifansub | Series</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<style>
.memek {
  margin: auto;
  background-color: #f7f3f3;
  width: 50%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.bokong {
  margin: auto;
  text-align: center;
  width: 100%;
  padding: 1px;
}

.koceng {
  display: inline-block;
  text-align: left;
 }

 div.rounded {
   
    border: 3px dotted gray;
    margin: auto;
  width: 70%;
	color: #000000;
	font-weight: bold;
    padding: 1px;
    
	-moz-border-radius: 5px;
    -webkit-border-radius: 10px; }
    
    div.kotak {
	background-color: white;
    margin: auto;
  width: 40%;
	color: #000000;
    padding: 10px;
    
	-moz-border-radius: 5px;
  -webkit-border-radius: 20px; }   
  
  body { 
   background: black url("/antifansub/inc/bg.png") no-repeat fixed center; 
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
<font face=Ubuntu>
<?php
$form = '<form action="series.php" method="get">
<input type="hidden" style="width:40%;" name="id"><br>
<input type="hidden" name="fansub" value="SUCK">
</center>
</form>';

print $form;


if(isset($_GET['id'])){
  $anti = $_GET['id'];
  $babi = "?anime=";
  $bangsat = 'https://anitoki.web.id/';
  $kontol = $bangsat . $babi . $anti; 
  $curl = curl_init($kontol); 
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
  $page = curl_exec($curl); 
  if(curl_errno($curl))
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

  
function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<a href="', '<a href="/steal/?id=', $ambilkata);
    $ambilkata = str_replace('https://anitoki.web.id/?p=', '', $ambilkata);
    return $ambilkata;
}

$regex = "/<div class='sinopc'>(.*?)<div class='disqusmen'>/s";
if ( preg_match($regex, $page, $list) )

    echo '<div class="kotak">',wordFilter3($list[0]),'</div>'; 

else 
    print "Not found";

}

?>
</div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/anti</font>
</font>
</div>   