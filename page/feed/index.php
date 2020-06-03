<?php 
header('Content-Type: text/plain');
$url = 'https://anitoki.web.id/feed/';

function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('<link>https://anitoki.web.id/', '<link>https://kato.kireisubs.org/steal/?id=', $ambilkata);

    return $ambilkata;
}
echo wordFilter(file_get_contents($url));