<?php
//function for creating account
//$link is the link to the database
//$username is the username of the new account
//$email is the email of the new account
//$hash is the hashed version of the password of the new account
function createAccount($link, $username, $email, $hash) {

    //get the id of the accounts with the same name or email
    $query = "SELECT id FROM accounts WHERE username = '$username' OR email = '$email'";
    $result = $link->query($query);

    if (mysqli_num_rows($result) == 0) { //execute if there isn't any other account with the same email or user
        
        //create a account in the database
        $query = "INSERT INTO accounts (username, email, hashedPassword)
        VALUES ('$username', '$email', '$hash')";
        $link->query($query);

        return true;
    } else { //return false if there is already an account with the same email or user
        return false;
    }
}

//function for logging in
//$link is the link to the database
//$username is the username of the account you want to login in with
//$hash is the hashed version of the password of the account you want to login with
function login($link, $username, $hash) {

    //get the id of the account you want to login
    $query = "SELECT id FROM accounts WHERE username = '$username' AND hashedPassword = '$hash'";
    $result = $link->query($query);

    if (mysqli_num_rows($result) == 1) { //login if the account exists
        
        //save the id of the account in the session
        while ($row = $result->fetch_assoc()) {
            $_SESSION['id'];
        }

        return true;
    } else { //return false if there is no account with this username and password
        return false;
    }
}
?>

