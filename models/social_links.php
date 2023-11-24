<?php

function getAllSocialLinks(){
    global $db;
    $social = "SELECT * FROM `social_links` WHERE `position` = 10";
    $resultSocial = mysqli_query($db, $social) or die(mysqli_error($db));
    return @mysqli_fetch_all($resultSocial, MYSQLI_ASSOC);

}

function getAllLinksFooter(){
    global $db;
    $social = "SELECT * FROM `social_links` WHERE  `position` = 20";
    $resultSocialFooter = mysqli_query($db,$social) or die (mysqli_error($db));
    return @mysqli_fetch_all($resultSocialFooter, MYSQLI_ASSOC);
}

#BACKEND FUNCTION
function getAllSocialL(){
    global $db;
    $social = "SELECT * FROM `social_links` WHERE `status` = 1";
    $result = mysqli_query($db,$social) or die(mysqli_error($db));
    return @mysqli_fetch_all($result, MYSQLI_ASSOC);
}


function addNewSocialLinks($name,$icon_class,$link,$position,$status){
    global $db;
    $query = "INSERT INTO `social_links`(`name`, `icon_class`, `link`, `position`, `status`)  VALUE ('$name','$icon_class','$link','$position','$status')";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0){
        return true;
    }else{
        return false;
    }
}

function getSocialLinksById($id){
    global $db;
    $query = "SELECT * FROM `social_links` WHERE `id` = $id";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    return @mysqli_fetch_assoc($result,);
}

function upDateSocialLinks($id,$name,$icon_class,$link,$position,$status){
    global $db;
    $query = "UPDATE `social_links` SET `id` = '$id', `name` = '$name', `icon_class` = '$icon_class', `link` = '$link', `position` = '$position', `status` = '$status' WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;
}

function deleteSocialLinks($id){
    global $db;
    $query = "DELETE FROM `social_links` WHERE `id` = $id";
    $result = mysqli_query($db,$query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0){
        return true;
    }else{
        return false;
    }
}
