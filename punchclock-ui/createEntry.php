<?php

session_start();
$json = json_encode($_POST);

var_dump($json);

$curl = curl_init();

curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: ' . $_SESSION['jwt']));
curl_setopt($curl, CURLOPT_URL, "http://localhost:8081/entries");

$result = curl_exec($curl);
curl_close($curl);

header("Location: index.php");