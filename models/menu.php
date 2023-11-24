<?php

function getAllMenus($parent = 0, $position = 1){
    global $db;
    $query = "SELECT * FROM `menu` WHERE `status` = 1 AND `parent` = $parent AND `position` = '$position' ORDER BY `order_by` ASC";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    return @mysqli_fetch_all($result,MYSQLI_ASSOC);
}

//BACKEND MENUS

function getAllBackMenus(){
    global $db;
    $query = "SELECT * FROM `menu` ORDER BY `id` ASC";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    return @mysqli_fetch_all($result,MYSQLI_ASSOC);
}

function addNewMenu($title,$link,$position,$order_by,$parent,$status){
    global $db;
    $query = "INSERT INTO `menu`(`title`,`link`,`position`,`order_by`,`parent`,`status`) VALUE ('$title','$link','$position','$order_by','$parent','$status')";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0){
        return true;
    }else{
        return false;
    }
}

function getMenuById($id){
    global $db;
    $query = "SELECT * FROM `menu` WHERE `id` = $id";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    return @mysqli_fetch_assoc($result,);
}

function upDateMenu($id,$title,$link,$position,$order_by,$parent,$status){
    global $db;
    $query = "UPDATE `menu` SET `title` = '$title', `link` = '$link', `position` = '$position', `order_by` = '$order_by', `parent` = '$parent', `status` = '$status' WHERE `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;
}

function deleteMenu($id){
    global $db;
    $query = "DELETE FROM `menu` WHERE `id` = $id ";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0){
        return true;
    }else{
        return false;
    }
}
