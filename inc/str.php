<?php
echo '<font face=Ubuntu>';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;

    //open element
	$ambilkata = str_replace('class="fa fa-tag">', '</font><hr color=gray width=20%>', $ambilkata);
    $ambilkata = str_replace('</p>', '', $ambilkata);
    $ambilkata = str_replace('<p>', '', $ambilkata);
    $ambilkata = str_replace('<div class="kover">', '<div class="column" style="background-color:transparent;">', $ambilkata);
  
    $ambilkata = str_replace('width=', 'width="150"', $ambilkata);
    $ambilkata = str_replace('height=', 'height="150" class="img1"', $ambilkata);
    $ambilkata = str_replace('h2', 'h4', $ambilkata);
    $ambilkata = str_replace("thumb", 'kotak', $ambilkata);
    $ambilkata = str_replace('<ul>', '', $ambilkata);
    $ambilkata = str_replace('Posted', '', $ambilkata);
    $ambilkata = str_replace('Released', '', $ambilkata);
    $ambilkata = str_replace('Admin', '<font color=pink><b>Sin.</b></font>,', $ambilkata);
    
    $ambilkata = str_replace("Check More Anime <a href='https://anitoki.web.id/archives/anime/", "<i class='fa fa-list' style='font-size:20px;color:white'></i> <a href='/page/list/series.php?id=", $ambilkata);
    $ambilkata = str_replace('For more Episodes', '/m0re', $ambilkata);
    //openurl
    $ambilkata = str_replace('" title=', '" rel="nofollow" target="_blank" title=', $ambilkata);
    $ambilkata = str_replace('href="https://anitoki.web.id/', 'href="/steal/?id=', $ambilkata);
    
    
    return $ambilkata;
}

$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="id"><br>
<input type="hidden" name="fansub">
</center>
</form>';