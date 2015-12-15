<?php

//$url = 'http://www.polovniautomobili.com/putnicka-vozila/pretraga?brand=473&model=2159&year_from=2004&year_to=2004&without_price=1&fuel%5B0%5D=2309&showOldNew=all';
$url = 'http://www.php.net';

$ch = curl_init($url);

//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$curlScrapedPage = curl_exec($ch);

curl_close($ch);

print_r($curlScrapedPage);

