<?php

session_start();


$curl = curl_init();

curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: ' . $_SESSION['jwt']));
curl_setopt($curl, CURLOPT_URL, 'http://localhost:8081/entries/'.$_POST['id']);

$result = curl_exec($curl);
curl_close($curl);

header("Location: index.php");