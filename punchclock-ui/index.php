<?php
    session_start();
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "http://localhost:8081/entries");
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: ' . $_SESSION['jwt']));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    curl_close($curl);

    $entries = json_decode($result);

    foreach($entries as $key => $value) {
        $entries[$key] = (array) $value;
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <h1>Punchclock Index</h1>

    <?php foreach($entries as $key => $value): ?>
        <div class="row">
            <div class="col">Entry <?= $value['id'] ?>:</div>
            <div class="col"><?= $value['checkIn'] ?></div>
            <div class="col"><?= $value['checkOut'] ?></div>
        </div>
    <?php endforeach; ?>

</body>
</html>