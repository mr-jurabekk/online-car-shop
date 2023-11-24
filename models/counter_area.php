<?php

function getAllCounter(){
    global $db;
    $query = "SELECT * FROM `counter_area` WHERE `status` = 1";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}