<?php

function getAllSlider(){
    global $db;
    $query = "SELECT * FROM `slider` WHERE `status` = 1 ";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

# BACKEND SLIDER
function getAllBackSlider(){
    global $db;
    $query = "SELECT * FROM `slider`";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function addNewSlider($subtitle,$title,$description,$btn_link_1,$btn_link_2,$btn_text_1,$btn_text_2,$status){
    global $db;
    $query = "INSERT INTO `slider` (`subtitle`, `title`, `description`, `btn_link_1`, `btn_link_2`, `btn_text_1`, `btn_text_2`, `status`) VALUES ('$subtitle','$title','$description','$btn_link_1','$btn_link_2','$btn_text_1','$btn_text_2','$status')";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0){
        return mysqli_insert_id($db);
    }

    return false;
}

function getSlideById($id){
    global $db;
    $query = "SELECT * FROM `slider` WHERE `id` = '$id'";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));
    return mysqli_fetch_assoc($result);
}

function updateSlider($id,$subtitle,$title,$description,$btn_link_1,$btn_link_2,$btn_text_1,$btn_text_2,$status){
    global $db;

    # Tutiq belgi uchun
    $subtitle = mysqli_real_escape_string($db,$subtitle);
    $title = mysqli_real_escape_string($db,$title);
    $description = mysqli_real_escape_string($db,$description);

    $query = "UPDATE `slider` SET `subtitle` = '$subtitle', `title` = '$title', `description` = '$description', `btn_link_1` = '$btn_link_1', `btn_text_1` = '$btn_text_1', `btn_link_2` = '$btn_link_2', `btn_text_2` = '$btn_text_2', `status` = '$status' WHERE `id` = $id";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;
}

function deleteSlider($id){
    global $db;

    $sliderData = getSlideById($id);
    deleteImage('slider',$id,$sliderData['slider_bg']);
    deleteImage('slider',$id,$sliderData['car_image']);
    deleteFolder('slider',$id);

    $query = "DELETE FROM `slider` WHERE `id` = '$id'";
    $result = mysqli_query($db,$query) or die(mysqli_error($db));
    if(mysqli_affected_rows($db) > 0) {
        return true;
    }
    return false;
}