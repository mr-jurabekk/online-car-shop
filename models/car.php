<?php

function getAllCars(){
    global $db;
    $query = "SELECT * FROM `car` WHERE `status` = 1";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getCarById($id){
    global $db;
    $query = "SELECT * FROM `car` WHERE `status` = 1 AND `id` = '$id'";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_assoc($result);
}

function getAllCarsByCategoryId($id,$sortType = null){
    global $db;

    switch ($sortType){
        case 'name-asc':
            $query = "SELECT * FROM `car` WHERE `category_id` = '$id' ORDER BY `name` ASC";
        break;

        case 'name-desc':
            $query = "SELECT * FROM `car` WHERE `category_id` = '$id' ORDER BY `name` DESC";
        break;

        case 'price-asc':
            $query = "SELECT * FROM `car` WHERE `category_id` = '$id' ORDER BY `new_price` ASC";
        break;

        case 'price-desc':
            $query = "SELECT * FROM `car` WHERE `category_id` = '$id' ORDER BY `new_price` DESC";
        break;

        case 'year-asc':
            $query = "SELECT * FROM `car` WHERE `category_id` = '$id' ORDER BY `year` ASC";
        break;

        case 'year-desc':
            $query = "SELECT * FROM `car` WHERE `category_id` = '$id' ORDER BY `year` DESC";
        break;

        default:
            $query = "SELECT * FROM `car` WHERE `category_id` = '$id'";
        break;
    }

    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}



#BACKEND FUNCTION
function getAllBackCar(){
    global $db;
    $query = "SELECT * FROM `car` WHERE `status` = 1";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// CAR ADD
function addNewCar($name,$karobka,$benzin,$year,$mator,$old_price,$new_price,$category_id,$mini_description,$description,$used,$new,$status){
    global $db;
    $query = "INSERT INTO `car` (`name`, `karobka`, `benzin`,`year`,`mator`,`old_price`,`new_price`,`category_id`,`mini_description`,`description`,`used`,`new`,`status`) VALUES ('$name','$karobka','$benzin','$year','$mator','$old_price','$new_price','$category_id','$mini_description','$description','$used','$new','$status')";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0){
        return mysqli_insert_id($db);
    }

    return false;
}

// CAR EDIT
function updateCar($id,$name,$karobka,$benzin,$year,$mator,$old_price,$new_price,$category_id,$mini_description,$description,$used,$new,$status){
    global $db;

    # Tutiq belgi uchun
    $subtitle = mysqli_real_escape_string($db,$name);
    $title = mysqli_real_escape_string($db,$mini_description);
    $description = mysqli_real_escape_string($db,$description);

    $query = "UPDATE `car` SET `name` = '$name', `karobka` = '$karobka', `benzin` = '$benzin', `year` = '$year', `mator` = '$mator', `old_price` = '$old_price', `new_price` = '$new_price', `category_id` = '$category_id', `mini_description` = '$mini_description', `description` = '$description', `used` = '$used', `new` = '$new',  `status` = '$status' WHERE `id` = $id";
    $result = @mysqli_query($db, $query) or die(mysqli_error($db));
    return true;
}

// CAR DELETE
function deleteCar($id){
    global $db;

    $carData = getCarById($id);
    deleteImage('car',$id,$carData['image']);
    deleteFolder('car',$id);

    $query = "DELETE FROM `car` WHERE `id` = '$id'";
    $result = mysqli_query($db,$query) or die(mysqli_error($db));
    if(mysqli_affected_rows($db) > 0) {
        return true;
    }
    return false;
}