<?php

    function getAllNews(){
        global $db;

        $query = "SELECT * FROM `news` WHERE `status` = 1";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function getNewsById(){
        global $db;
        $query = "SELECT * FROM `news_blog` WHERE `status` = 1";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }