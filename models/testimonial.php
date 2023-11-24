<?php

    function getAllTestimonial(){
        global $db;
        $query = "SELECT * FROM `testimonial` WHERE `status` = 1";
        $result = @mysqli_query($db, $query) or die(mysqli_query($db));
        return @mysqli_fetch_all($result, MYSQLI_ASSOC);
    }