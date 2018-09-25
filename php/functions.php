<?php

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'facebible');
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    $password = 'ebboer';
    $username = 'banaan';
    $email = 'huis@gmail.com';
    $hash = hash("sha256", $password);

    accountMaken($mysqli, $username, $email, $hash);

    $mysqli->close();

    function accountMaken($link, $username, $email, $hash) {

        $query = "INSERT INTO accounts (username, email, hashedPassword)
        VALUES ('$username', '$email', '$hash')";
        $link->query($query);
    }

    function accountOphalen($link, $username) {

        $query = "SELECT * FROM accounts
        WHERE username='$username'";
        $result = $link->query($query);
    }
?>