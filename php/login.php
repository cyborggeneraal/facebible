<?php
    include 'intialize.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <form action="loginProcess.php" method="post">
            Username: <input type="text" name="name"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit" name="createAccount">
        </form>

        <?php echo $_SESSION['id'];?>

    </body>
</html>