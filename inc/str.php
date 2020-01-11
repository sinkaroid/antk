<?php
echo '<font face=Ubuntu>';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;

    //open element
	$ambilkata = str_replace('class="fa fa-tag">', '</font></div></div><hr color=gray width=20%><br><section><p hidden>', $ambilkata);
    $ambilkata = str_replace('</p>', '', $ambilkata);
    $ambilkata = str_replace('<p>', '', $ambilkata);
    $ambilkata = str_replace('class=thumb>', 'class="kotak">', $ambilkata);
    $ambilkata = str_replace('width=', 'width="190"', $ambilkata);
    $ambilkata = str_replace('height=', 'height="190"', $ambilkata);
    $ambilkata = str_replace('h2', 'h4', $ambilkata);
    $ambilkata = str_replace('<ul>', '', $ambilkata);
    $ambilkata = str_replace('Posted', '', $ambilkata);
    $ambilkata = str_replace('Released', '', $ambilkata);
    $ambilkata = str_replace('Admin', '<font color=green><b>KANNA</b></font><font color=skyblue>(BOT)</font>,', $ambilkata);
    

    $ambilkata = str_replace('<i class="fa fa-user"></i>', '[<font face=consolas size=2>', $ambilkata);
    //openurl
    $ambilkata = str_replace('" title=', '" rel="nofollow" target="_blank" title=', $ambilkata);
    $ambilkata = str_replace('href="https://anitoki.web.id/?p=', 'href="/steal/?id=', $ambilkata);
    $ambilkata = str_replace('https://anitoki.web.id/?p=', '', $ambilkata);
    
    return $ambilkata;
}

$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="id"><br>
<input type="hidden" name="fansub">
</center>
</form>';