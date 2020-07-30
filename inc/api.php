<style>
.blinking{
    animation:blinkingText 1s infinite;
}
@keyframes blinkingText{
    0%{     color: white;    }
    49%{    color: yellow; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: cyan;    }
}
</style>
<?php
function wf($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('title', '', $ambilkata);
    $ambilkata = str_replace('<>', '', $ambilkata);
    $ambilkata = str_replace('</>', '', $ambilkata);
    $ambilkata = str_replace(' Anime Schedule - Today & Weekly Air Times', '', $ambilkata);
    return $ambilkata;
}
$curl = curl_init('https://animeschedule.net/'); //victim
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo ' error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

$regex = '/<title>(.*?)<\/title>/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<span class="blinking">',wf($list[0]),'</span>'; 
else 
    print "Not found"; 
?>
