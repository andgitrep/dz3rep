<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Code at Github!</title>

</head>
<body>

<h1>Hello! This code is stored on Github!</h1>

</body>
</html>

<?php

$user = 'root';
$pass = 'secret';

try {
    echo "Check db connection: ";
    $dbh = new PDO('mysql:host=db;dbname=users', $user, $pass);
    var_dump($dbh);
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

