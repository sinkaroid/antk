<?php
echo '<font face="Ubuntu">';
 function sedx($text)
  {
      $sed = $text;
      $sed = str_replace('<div class="user-bar">', '<div hidden>', $sed);
      $sed = str_replace('<div class="primary-bar">', '<div hidden>', $sed);
      $sed = str_replace('<div class="chart-header column">', '<div hidden>', $sed);
      $sed = str_replace('<div class="column-medium-6">', '<div hidden>', $sed);
      $sed = str_replace('<i class="icon-navigate_first">', '<i hidden>', $sed);
      $sed = str_replace('<i class="icon-navigate_last">', '<i hidden>', $sed);
      $sed = str_replace('<footer>', '<p hidden>', $sed);
      $sed = str_replace('<div class="footer-links">', '<p hidden>', $sed);
      $sed = str_replace('site design', '<p hidden>', $sed);
      $sed = str_replace('href="/', '', $sed);
      
      return $sed;
  }
  
  
  function get_dataa($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
  }
  
  $site = get_dataa('https://www.livechart.me/timetable');

  echo sedx($site);
  
  exit;
