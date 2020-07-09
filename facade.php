<?php
header('Content-Type: application/json');
$curl = curl_init("https://corin.at/data4gis.php");
$result = curl_exec($curl);
curl_close($curl);
json_encode($result);
?>