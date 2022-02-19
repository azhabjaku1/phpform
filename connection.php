<?php

    $server = "localhost";
    $database = "arbzha17sql2";
    $user = "arbzha17sql2";
    $pwd = "f%r?V62C";

    try {
        $con = new PDO("mysql:host=$server;dbname=$database", $user, $pwd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p></p>";
    }
    catch(PDOException $e) {
        echo "<p>Es konnte keine Verbindung zur Datenbank hergestellt werden: " . $e->getMessage() . "</p>";
    }

?>

