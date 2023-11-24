<?php

function getPageDataById($id){
    global $db;
    $query = "SELECT * FROM `page` WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_assoc($result);
}