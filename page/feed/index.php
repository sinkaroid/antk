<?php 
header('Content-Type: text/plain');
$url = 'https://anitoki.web.id/?feed=rss2';

function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('https://anitoki.web.id/?p=', 'https://kato.kireisubs.org/steal/?id=', $ambilkata);

    return $ambilkata;
}
echo wordFilter(file_get_contents($url));