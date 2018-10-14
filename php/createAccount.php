<?php
    include 'intialize.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <form action="createAccountProcess.php" method="post">
            Username: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit" name="createAccount">
        </form>

    </body>
</html>