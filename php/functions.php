<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <form action="functions.php" method="post">
            Username: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit" name="createAccount">
        </form>

        <?php

        $mysqli = new mysqli('127.0.0.1', 'root', '', 'facebible');
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') '
                    . $mysqli->connect_error);
        }

        if ($_POST["createAccount"]) {
            $password = $_POST["password"];
            $username = $_POST["name"];
            $email = $_POST["email"];
            $hash = hash("sha256", $password);

            accountMaken($mysqli, $username, $email, $hash);
        }

        $mysqli->close();

        function accountMaken($link, $username, $email, $hash) {

            $query = "INSERT INTO accounts (username, email, hashedPassword)
            VALUES ('$username', '$email', '$hash')";
            $link->query($query);
        }

        /*function accountOphalen($link, $username) {

            $query = "SELECT * FROM accounts
            WHERE username='$username'";
            $result = $link->query($query);
        }*/
        ?>

    </body>
</html>

