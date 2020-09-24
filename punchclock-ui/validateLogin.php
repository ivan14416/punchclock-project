<?php
$json = json_encode($_POST);


$curl = curl_init();

curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl, CURLOPT_URL, "http://localhost:8081/login");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HEADER, 1);

$result = curl_exec($curl);
curl_close($curl);

$header = get_headers_from_curl_response($result);

if(array_key_exists("Authorization", $header)) {
    $_SESSION['jwt'] = $header['Authorization'];
    header('Location: index.php')
} else {
    header('Location: login.php');
}


function get_headers_from_curl_response($response)
{
    $headers = array();

    $header_text = substr($response, 0, strpos($response, "\r\n\r\n"));

    foreach (explode("\r\n", $header_text) as $i => $line)
        if ($i === 0)
            $headers['http_code'] = $line;
        else
        {
            list ($key, $value) = explode(': ', $line);

            $headers[$key] = $value;
        }

    return $headers;
}

