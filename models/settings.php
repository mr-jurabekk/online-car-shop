<?php

function getSettings($name = null){
    global $db;
    $query = "SELECT * FROM `settings` WHERE `name` = '$name'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_assoc($result)['value'];
}