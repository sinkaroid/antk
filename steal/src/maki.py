<?php
$html = file_get_contents('http://kato.kireisubs.org/mayu/');

function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('Check More Anime <a href=', 'Check More Anime <data-lazy-src=', $ambilkata);
    $ambilkata = str_replace('<a href="list" rel="nofollow" target="_blank">', '', $ambilkata);
    return $ambilkata;
}

//Create a new DOM document
$dom = new DOMDocument;

//Parse the HTML. The @ is used to suppress any parsing errors
//that will be thrown if the $html string isn't valid XHTML.
@$dom->loadHTML($html);

//Get all links. You could also use any other tag name here,
//like 'img' or 'table', to extract other tags.
$links = $dom->getElementsByTagName('a');

//Iterate over the extracted links and display their URLs
foreach ($links as $link){
    //Extract and show the "href" attribute.
    echo '[',$link->nodeValue,']',' => ';
    echo wordFilter($link->getAttribute('href')),"\n";
}