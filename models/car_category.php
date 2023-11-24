<?php 
    function getAllCategory(){
        global $db;
        $query = "SELECT * FROM `car_category` WHERE `status` = 1";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    function getDataByCarCategory($id){
        global $db;
        $query = "SELECT * FROM `car_category` WHERE `status` = 1 AND `id` = '$id'";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }


    # BACKEND FUNCTION
    function getAllBackCarCategory(){
        global $db;
        $query = "SELECT * FROM `car_category` WHERE `status` = 1";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


//    CAR CATEGORY ADD
    function addNewCarCategory($title,$status){
        global $db;

        $query = "INSERT INTO `car_category` (`title`,`status`) VALUES ('$title','$status')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));

        if(mysqli_affected_rows($db) > 0){
            return mysqli_insert_id($db);
        }

        return false;
    }

    function getDataByCarCategoryId($id){
        global $db;
        $query = "SELECT * FROM `car_category` WHERE `status` = 1 AND `id` = '$id'";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }

    //CAR CATEGORY EDIT
    function updateCarCategory($id,$title,$status){
        global $db;

        # Tutiq belgi uchun
        $title = mysqli_real_escape_string($db,$title);

        $query = "UPDATE `car_category` SET `title` = '$title', `status` = '$status' WHERE `id` = $id";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return true;
    }

    // CAR CATEGORY DELETE
    function deleteCarCategory($id){
        global $db;

        $carCategoryData = getDataByCarCategoryId($id);
        deleteImage('car_category',$id,$carCategoryData['image']);
        deleteFolder('car_category',$id);

        $query = "DELETE FROM `car_category` WHERE `id` = '$id'";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0) {
            return true;
        }
        return false;
    }