<?php

    function getAllCarBrands(){
        global $db;
        $query = "SELECT * FROM `car_brands` WHERE `status` = 1";
        $result = @mysqli_query($db,$query) or die(mysqli_query($db));
        return @mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


    //   BACKEND FUNCTION

    function getAllCarBrandsBack(){
        global $db;
        $query = "SELECT * FROM `car_brands`";
        $result = @mysqli_query($db,$query) or die(mysqli_query($db));
        return @mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    //    CAR BRAND ADD
    function addNewCarBrand($title,$status){
        global $db;

        $query = "INSERT INTO `car_brands` (`title`,`status`) VALUES ('$title','$status')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));

        if(mysqli_affected_rows($db) > 0){
            return mysqli_insert_id($db);
        }

        return false;
    }

    //CAR BRAND EDIT
    function updateCarBrand($id,$title,$status){
        global $db;

        # Tutiq belgi uchun
        $title = mysqli_real_escape_string($db,$title);

        $query = "UPDATE `car_brands` SET `title` = '$title', `status` = '$status' WHERE `id` = $id";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return true;
    }

    function getAllCarBrandById($id){
        global $db;
        $query = "SELECT * FROM `car_brands` WHERE `status` = 1 AND `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_query($db));
        return @mysqli_fetch_assoc($result);
    }

    // CAR BRAND DELETE
    function deleteCarBrand($id){
        global $db;

        $carBrandData = getAllCarBrandById($id);

        deleteImage('car_brands', $id, $carBrandData['image']);

        deleteFolder('car_brands', $id);

        $query = "DELETE FROM `car_brands` WHERE `id` = '$id'";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));

        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
