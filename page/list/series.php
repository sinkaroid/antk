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

.moka {
	padding:15;
  margin:0;
  width: 1000px;
	
	background:rgba(255, 255, 255, 0.767);

	
	-moz-border-radius: 5px;
	  border-radius: 20px;
	
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
    background: url(/inc/back.png) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
 }

.intro {
  margin: auto;
  background-color: #f7f3f3;
  width: 30%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 20px;
}

.card-horizontal {
  display: flex;
  flex: 1 1 auto;
}

.img1 {
		filter: drop-shadow(0 4px 5px rgba(0, 0, 0, 0.65));
		animation: pulsePic 2s infinite;
		-webkit-animation: pulsePic 2s infinite;
		border-radius: 50%;
		
		display: block;
		margin-left: auto;
		margin-right: auto;
		
		text-align: center;
		user-select: none;
		-moz-user-select: none;
		-webkit-user-drag: none;
		-webkit-user-select: none;
		-ms-user-select: none
  
 }
</style>
<font face=Ubuntu>
<?php
$start_time = microtime(true);
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
    $ambilkata = str_replace('href="', 'href="/steal/?id=', $ambilkata);
    $ambilkata = str_replace('https://anitoki.web.id/', '', $ambilkata);
    $ambilkata = str_replace('<p style="text-align: justify;"><span style="color: #ff0000;">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<p style="text-align: center;"><iframe', '<p hidden><iframe', $ambilkata);
    return $ambilkata;
}

$regex = "/<div class='sinopc'>(.*?)<div class='disqusmen'>/s";
if ( preg_match($regex, $page, $list) )

    echo '<div class="kotak"><a href="/">/home</a>',wordFilter3($list[0]),'</div>'; 

else 
    print "Not found";

}

?>
</div></div>
<p><center>

<div class="intro" style="width: 400px">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>
(<a href="https://dolls.redsplit.org/783823617" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="2" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/Anti</font>
</font>
</div>  