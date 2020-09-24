<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <h1>Punckclock Login</h1>
    <form action="validateLogin.php" method="post">
        <p>Username</p>
        <input type="text" name="username"/>
        <p>Password</p>
        <input type="text" name="password"/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>