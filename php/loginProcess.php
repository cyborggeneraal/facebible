<?php
    include 'intialize.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            $mysqli = new mysqli('127.0.0.1', 'root', '', 'facebible');
            if ($mysqli->connect_error) {
                die('Connect Error (' . $mysqli->connect_errno . ') '
                        . $mysqli->connect_error);
            }

            $password = $_POST["password"];
            $username = $_POST["name"];
            $hash = hash("sha256", $password);

            login($mysqli, $username, $hash);

            $mysqli->close();

            header("Location: ./login.php");
            exit;
        ?>
    </body>
</html>
