<?
$curl=curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url); 
curl_exec($curl);
?>