<?php

function debug($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}


function generateMenuElements($position){
    $result = [];
    $allMenus = getAllMenus(0, $position);

    foreach ($allMenus as $menu){
        $result[$menu['id']] = $menu;
        $children = getAllMenus($menu['id'],$position);
        if(!empty($children)){
            $result[$menu['id']]['children'] = $children;
        }
    }

    return $result;
}

function generateSocialLinks(){
    $result = [];
    $allSocialLinks = getAllSocialLinks();

    foreach ($allSocialLinks as $allSocialLink){
        $result[$allSocialLink['id']] = $allSocialLink;
    }

    return $result;
}

function generateSocialLinksF(){
    $result = [];
    $allSocialLinksF = getAllLinksFooter();
    foreach ($allSocialLinksF as $allSocialLinkF){
        $result[$allSocialLinkF['id']] = $allSocialLinkF;
    }
    return $result;
}


function getImage($tableName,$modelId,$image){

    $file = __DIR__ . "/uploads/{$tableName}/{$modelId}/{$image}";
    $dir = __DIR__."/uploads/$tableName/$modelId/";

    if(!is_dir($dir)){
        mkdir($dir,0777,true);

    }

    if(is_file($file)){
        return FRONTEND . "uploads/{$tableName}/$modelId/$image";
    }else{

        return FRONTEND . "uploads/no_image.jpg";
    }
}



function saveImage($tableName,$modelId,$image,$rowName){

    $dir = __DIR__."/uploads/$tableName/$modelId/";

    $fileName = "image_" . sha1($image['name'].rand(0,999999999) . time());
    $ext = "";

    switch ($image['type']){
        case 'image/jpeg': $ext = ".jpg"; break;
        case 'image/jpg': $ext = ".jpg"; break;
        case 'image/png': $ext = ".png"; break;
        case 'image/svg+xml': $ext = ".svg"; break;
        case 'image/webp': $ext = ".webp"; break;
    }

    if(!is_dir($dir)){
        mkdir($dir,0777,true);

    }

    $fullDir = $dir . $fileName . $ext;
    move_uploaded_file($image['tmp_name'],$fullDir);

    global $db;
    $query = "UPDATE `$tableName` SET `{$rowName}` = '{$fileName}{$ext}' WHERE `id` = '$modelId'";
    @mysqli_query($db,$query) or die(mysqli_error($db));

}


# DELETE IMAGE
function deleteImage($tableName,$id,$image){
    $file = __DIR__."/uploads/$tableName/$id/$image";
    if(is_file($file)){
        unlink($file);
    }
}

# DELETE FOLDER
function deleteFolder($tableName,$id){
    $dir = __DIR__."/uploads/$tableName/$id/";
    if(is_dir($dir)){
        rmdir($dir);
    }
}
