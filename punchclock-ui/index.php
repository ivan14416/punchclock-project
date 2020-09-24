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
<div class="container">
    <h1>Punchclock Index</h1>
    <form action="createEntry.php" method="post">
        <input type="datetime" name="checkIn" placeholder="Check In">
        <input type="datetime" name="checkOut" placeholder="Check Out">
        <button type="submit">submit</button>
    </form>

    <div class="row">
        <div class="col"></div>
        <div class="col">Check in</div>
        <div class="col">Check out</div>
        <div class="col"></div>
    </div>
    <?php foreach($entries as $key => $value): ?>
        <div class="row">
            <div class="col">Entry <?= $value['id'] ?>:</div>
            <div class="col"><?= $value['checkIn'] ?></div>
            <div class="col"><?= $value['checkOut'] ?></div>
            <div class="col">
                <form action="deleteEntry.php" method="post">
                    <input type="hidden" name="id" value="<?= $value['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>