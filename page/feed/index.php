<?php 
header('Content-Type: text/plain');
$url = 'https://anitoki.com/?feed=rss2';

function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('https://anitoki.com/?p=', 'https://kato.kireisubs.org/get.php?anti=', $ambilkata);

    return $ambilkata;
}
echo wordFilter(file_get_contents($url));