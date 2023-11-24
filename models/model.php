<?php

require_once 'menu.php'; //function for working with menu data table

require_once  'social_links.php'; // social links

require_once 'slider.php'; // slider

require_once 'counter_area.php'; // counter area

require_once 'car.php'; // car latest

require_once 'car_category.php'; // car category

require_once 'car_brands.php'; // car brands

require_once 'testimonial.php'; // testimonial

require_once 'news.php'; // News

require_once 'settings.php'; // Settings

require_once 'page.php'; // page

require_once 'user.php'; // user

require_once 'car_order.php'; // Order car


// custom function

function addSeenCount($tableName, $id){
    global $db;
    $query = "SELECT `seen_count` FROM `$tableName` WHERE `id` = $id";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    $count = mysqli_fetch_assoc($result)['seen_count'];
    $count ++;
    $query = "UPDATE `$tableName` SET `seen_count` = '$count' WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0 ){
        return true;
    }
    return false;
}

function getTotalCount($tableName){
    global $db;
    $query = "SELECT COUNT(id) AS result FROM `$tableName`";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));
    return mysqli_fetch_assoc($result)['result'];
}