<?php

function login($username,$password){
    global $db;

    $username = mysqli_real_escape_string($db, $username);
    $password = sha1(mysqli_real_escape_string($db, $password));

    $query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password' AND `status` = 1";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));
    $userData = mysqli_fetch_assoc($result);
    if(!empty($userData)){
        $_SESSION['user'] = $userData;
        return true;
    }

    return false;
}