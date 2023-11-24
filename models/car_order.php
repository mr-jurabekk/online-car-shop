<?php
function newOrder($car_id,$qty,$total_sum,$name,$phone){
    global $db;
    $name = mysqli_real_escape_string($db,$name);
    $phone = mysqli_real_escape_string($db,$phone);
    $date = date('Y-m-d H:i:s');
    $query = "INSERT INTO `car_order`( `car_id`, `quantity`, `total_sum`, `created_date`, `name`, `phone`) VALUES ('$car_id','$qty','$total_sum','$date','$name','$phone')";
    $result = @mysqli_query($db,$query) or die(mysqli_error($db));

    if(mysqli_affected_rows($db) > 0){
        return true;
    }
    return false;
}