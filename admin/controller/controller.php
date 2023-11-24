<?php
session_start();


require_once __DIR__ . "/../../models/model.php";


if(!empty($_SESSION['user'])){

    $errorMessage = "";

    $user = $_SESSION['user'];

    $route = !empty($_GET['r']) ? $_GET['r'] : null;

    if(!empty($route)){
        switch ($route){
            case 'logout':
                unset($_SESSION['user']);
                header('refresh:0;url=/admin');
            break;

            # MENU READ
            case 'menu':
                $allMenus = getAllBackMenus();
                require_once __DIR__. "/../view/menu.php";
            break;

            # CRUD - CREATE READ UPDATE DELETE

            #MENU CREATE
            case 'menu-add':

                if(!empty($_POST)){
                    $title = $_POST['title'];
                    $link = $_POST['link'];
                    $position = $_POST['position'];
                    $order_by = $_POST['order_by'];
                    $parent = $_POST['parent'];
                    $status = $_POST['status'];
                    if(!empty($title) && !empty($link) && !empty($position) && !empty($order_by) && !empty($parent) && !empty($status) || $parent == 0 || $status == 1){
                        if(addNewMenu($title,$link,$position,$order_by,$parent,$status)){
                            header('refresh:0;url=/admin?r=menu');
                        }
                    }else{
                        $errorMessage = "To`ldirishi kerak bo`lgan qator qolib ketdi !";
                    }
                }

                require_once __DIR__. "/../view/menu_form.php";
            break;

            #MENU EDIT
            case 'menu-edit':
                $id = (!empty($_GET['id'])) ? $_GET['id']: null;
                if(!empty($id)){

                    $menuData = getMenuById($id);

                    if(!empty($menuData)){

                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $title = $_POST['title'];
                            $link = $_POST['link'];
                            $position = $_POST['position'];
                            $order_by = $_POST['order_by'];
                            $parent = $_POST['parent'];
                            $status = $_POST['status'];

                            if(!empty($id) && !empty($title) && !empty($link) && !empty($position) && !empty($order_by) && !empty($parent) && !empty($status) || $parent == 0 || $status == 1){
                                if(upDateMenu($id,$title,$link,$position,$order_by,$parent,$status)){
                                    header('refresh:0;url=/admin?r=menu');
                                }
                            }else{
                                $errorMessage = "To`ldirishi kerak bo`lgan qator qolib ketdi !";
                            }
                        }

                        require_once __DIR__. "/../view/menu_form.php";
                    }else{
                        require_once __DIR__. "/../view/error.php";
                    }

                }else{

                    require_once __DIR__. "/../view/error.php";
                }
            break;


            #MENU DELETE
            case 'menu-delete':
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;

                if(!empty($id)){
                    if(deleteMenu($id)){
                        header('refresh:0;url=/admin?r=menu');
                    }else{
                        require_once __DIR__. "/../view/error.php";
                    }
                }else{
                    require_once __DIR__. "/../view/error.php";
                }
            break;

            // social links
            case 'social_links':
                $allSocialLinks = getAllSocialL();
                require_once __DIR__. "/../view/social_links.php";
            break;

            #SOCIAL LINKS CRUD

            #  SOCIAL LINKS ADD
            case 'social-links-add':
                if(!empty($_POST)){
                    $name = $_POST['name'];
                    $icon_class = $_POST['icon_class'];
                    $link = $_POST['link'];
                    $position = $_POST['position'];
                    $status = $_POST['status'];
                    debug($name);
                    if(!empty($id) && !empty($name) && !empty($icon_class) && !empty($link) && !empty($position) && !empty($status) || $status == 1){
                        if(upDateSocialLinks($id,$name,$icon_class,$link,$position,$status)){
                            header('refresh:0;url=/admin?r=social_links');
                        }
                    }else{
                        $errorMessage = "To`ldirishi kerak bo`lgan qator qolib ketdi !";
                    }
                }

                require_once __DIR__. "/../view/social_add.php";
            break;

            # SOCIAL LINKS EDIT
            case 'social-links-edit':

                $id = (!empty($_GET['id'])) ? $_GET['id']: null;
                if(!empty($id)){

                    $getSocialLinksById = getSocialLinksById($id);
                    if(!empty($getSocialLinksById)){

                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $icon_class = $_POST['icon_class'];
                            $link = $_POST['link'];
                            $position = $_POST['position'];
                            $status = $_POST['status'];

                            if(!empty($id) && !empty($name) && !empty($icon_class) && !empty($link) && !empty($position)&& !empty($status) || $status == 1){
                                if(upDateSocialLinks($id,$name,$icon_class,$link,$position,$status)){
                                    header('refresh:0;url=/admin?r=social_links');
                                }
                            }else{
                                $errorMessage = "To`ldirishi kerak bo`lgan qator qolib ketdi !";
                            }
                        }
                        require_once __DIR__. "/../view/social_add.php";
                    }else{
                        require_once __DIR__. "/../view/error.php";
                    }
                }else{

                    require_once __DIR__. "/../view/error.php";
                }

            break;

            # SOCIAL LINKS DELETE
            case 'social-links-delete':
                $id = (!empty($_GET['id'])) ? $_GET['id']: null;
                if(!empty($id)){
                    if(deleteSocialLinks($id)){
                        header('refresh:0;url=/admin?r=social_links');
                    }else{
                        require_once __DIR__. "/../view/error.php";
                    }
                }else{
                    require_once __DIR__. "/../view/error.php";
                }
            break;


            # SLIDER
            case 'slider':
                $allslider = getAllBackSlider();
                require_once __DIR__. "/../view/slider.php";
            break;

            # SLIDER ADD
            case 'slider-add':
                if (!empty($_POST)){
                    $subtitle = $_POST['sub_title'];
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $btn_link_1 = $_POST['btn_link_1'];
                    $btn_link_2 = $_POST['btn_link_2'];
                    $btn_text_1 = $_POST['btn_text_1'];
                    $btn_text_2 = $_POST['btn_text_2'];
                    $status = $_POST['status'];

                    if (!empty($subtitle) && !empty($title) && !empty($description) && !empty($btn_link_1) && !empty($btn_link_2) && !empty($btn_text_1) && !empty($btn_text_2) && !empty($status) || $status == 0){
                        if($sliderId = addNewSlider($subtitle,$title,$description,$btn_link_1,$btn_link_2,$btn_text_1,$btn_text_2,$status)){


                            if(!empty($_FILES) && !empty($_FILES['slider_bg'])){
                                saveImage('slider',$sliderId,$_FILES['slider_bg'], 'slider_bg');

                            }

                            if(!empty($_FILES) && !empty($_FILES['car_image'])){
                                saveImage('slider',$sliderId,$_FILES['car_image'],'car_image');
                            }

                            header('refresh:0;url=/admin?r=slider');

                        }
                    }
                }
                require_once __DIR__. "/../view/slider_form.php";
            break;

            #SLIDER EDIT
            case 'slider-edit':

                $id = !empty($_GET['id']) ? $_GET['id'] : null;
                if(!empty($id)){

                    $slideData = getSlideById($id);

                    if(!empty($slideData)){

                        $carSliderImage = getImage('slider', $id, $slideData['car_image']);
                        $backgroundImage = getImage('slider', $id, $slideData['slider_bg']);

                        $oldCarImage = $slideData['car_image'];
                        $oldBackgroundImage = $slideData['slider_bg'];

                        if(!empty($_POST)){
                            $subtitle = $_POST['sub_title'];
                            $title = $_POST['title'];
                            $description = $_POST['description'];
                            $btn_link_1 = $_POST['btn_link_1'];
                            $btn_link_2 = $_POST['btn_link_2'];
                            $btn_text_1 = $_POST['btn_text_1'];
                            $btn_text_2 = $_POST['btn_text_2'];
                            $status = $_POST['status'];
                            if (!empty($subtitle) && !empty($title) && !empty($description) && !empty($btn_link_1) && !empty($btn_link_2) && !empty($btn_text_1) && !empty($btn_text_2) && !empty($status) || $status == 0){
                                if(updateSlider($id,$subtitle,$title,$description,$btn_link_1,$btn_link_2,$btn_text_1,$btn_text_2,$status)){

                                    if(!empty($_FILES) && !empty($_FILES['slider_bg']) && $_FILES['slider_bg']['error'] == 0){
                                        saveImage('slider',$id,$_FILES['slider_bg'], 'slider_bg');
                                        deleteImage('slider',$id,$oldBackgroundImage);

                                    }

                                    if(!empty($_FILES) && !empty($_FILES['car_image']) && $_FILES['car_image']['error'] == 0){
                                        saveImage('slider',$id,$_FILES['car_image'],'car_image');
                                        deleteImage('slider',$id,$oldCarImage);

                                    }

                                    header('refresh:0;url=/admin?r=slider');

                                }
                            }

                        }

                        require_once __DIR__. "/../view/slider_form.php";
                    }else{
                        require_once __DIR__. "/../view/error.php";
                    }


                }else{
                    require_once __DIR__. "/../view/error.php";
                }

                require_once __DIR__. "/../view/slider_form.php";
            break;

            #SLIDER DELETE
            case 'slider-delete':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id) && deleteSlider($id)){
                    header('refresh:0; url=/admin?r=slider');
                }
            break;

            # CAR
            case 'car':
                $allBackCar = getAllBackCar();

                require_once __DIR__."/../view/car.php";
            break;

            #CAR ADD
            case 'car-add':

                if (!empty($_POST)){
                    $name = $_POST['name'];
                    $karobka = $_POST['karobka'];
                    $benzin = $_POST['benzin'];
                    $year = $_POST['year'];
                    $mator = $_POST['mator'];
                    $old_price = $_POST['old_price'];
                    $new_price = $_POST['new_price'];
                    $category_id = $_POST['category_id'];
                    $mini_description = $_POST['mini_description'];
                    $description = $_POST['description'];
                    $used = $_POST['used'];
                    $new = $_POST['new'];
                    $status = $_POST['status'];
                    if (!empty($name) && !empty($karobka) && !empty($benzin) && !empty($year) && !empty($mator) && !empty($old_price) && !empty($new_price) && !empty($category_id)&& !empty($mini_description)&& !empty($description)&& !empty($used) && !empty($new) && !empty($status) || $status == 0){
                        if($carId = addNewCar($name,$karobka,$benzin,$year,$mator,$old_price,$new_price,$category_id,$mini_description,$description,$used,$new,$status)){

                            if(!empty($_FILES) && !empty($_FILES['car_add_image'])){

                                saveImage('car',$carId,$_FILES['car_add_image'], 'image');
                            }

                            header('refresh:0;url=/admin?r=car');
                        }
                    }
                }

                require_once __DIR__. "/../view/car_form.php";
            break;

            #  CAR EDIT
            case 'car-edit':
                $id = !empty($_GET['id']) ? $_GET['id'] : null;
                if (!empty($id)){
                    $carData = getCarById($id);

                    if(!empty($carData)){

                        $carImage = getImage('car', $id, $carData['image']);

                        $oldCarImage = $carData['image'];

                        if (!empty($_POST)){
                            $name = $_POST['name'];
                            $karobka = $_POST['karobka'];
                            $benzin = $_POST['benzin'];
                            $year = $_POST['year'];
                            $mator = $_POST['mator'];
                            $old_price = $_POST['old_price'];
                            $new_price = $_POST['new_price'];
                            $category_id = $_POST['category_id'];
                            $mini_description = $_POST['mini_description'];
                            $description = $_POST['description'];
                            $used = $_POST['used'];
                            $new = $_POST['new'];
                            $status = $_POST['status'];

                            if (!empty($name) && !empty($karobka) && !empty($benzin) && !empty($year) && !empty($mator) && !empty($old_price) && !empty($new_price) && !empty($category_id)&& !empty($mini_description)&& !empty($description)&& !empty($used) && !empty($new) && !empty($status) || $status == 0){
                                if(updateCar($id,$name,$karobka,$benzin,$year,$mator,$old_price,$new_price,$category_id,$mini_description,$description,$used,$new,$status)){


                                    if(!empty($_FILES) && !empty($_FILES['car_add_image']) && $_FILES['car_add_image']['error'] == 0){
                                        saveImage('car',$id,$_FILES['car_add_image'],'image');
                                        deleteImage('car',$id,$oldCarImage);

                                    }

                                    header('refresh:0;url=/admin?r=car');

                                }
                        }else{
                                require_once __DIR__. "/../view/car_form.php";
                            }

                        }

                        require_once __DIR__. "/../view/car_form.php";
                    }
                    require_once __DIR__. "/../view/car_form.php";                }
            break;

            #  CAR DELETE
            case 'car-delete':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id) && deleteCar($id)){
                    header('refresh:0; url=/admin?r=car');
                }
            break;

            #CAR CATEGORY
            case 'car_category':
                $getAllBackCarCategory = getAllBackCarCategory();
                require_once __DIR__."/../view/car_category.php";
            break;

            # CAR CATEGORY ADD
            case 'car_category-add':
                if (!empty($_POST)){
                    $title = $_POST['title'];
                    $status = $_POST['status'];

                    if (!empty($title) && !empty($status) || $status == 0){
                        if($carCategoryId = addNewCarCategory($title,$status)){

                            if(!empty($_FILES) && !empty($_FILES['car_category_add_image'])){
                                saveImage('car_category',$carCategoryId,$_FILES['car_category_add_image'], 'image');

                            }

                            header('refresh:0;url=/admin?r=car_category');

                        }
                    }
                }
                require_once __DIR__. "/../view/car_category_form.php";
            break;

            #CAR CATEGORY EDIT
            case 'car_category-edit':
                $id = !empty($_GET['id']) ? $_GET['id'] : null;

                if (!empty($id)){

                    $carCategoryData = getDataByCarCategoryId($id);
                    if(!empty($carCategoryData)){

                        $carCategoryImage = getImage('car_category', $id, $carCategoryData['image']);
                        $oldCarCategoryImage = $carCategoryData['image'];

                        if (!empty($_POST)){
                            $title = $_POST['title'];
                            $status = $_POST['status'];


                            if (!empty($title) && !empty($status) || !empty($status) == 0){



                                    if(!empty(updateCarCategory($id,$title,$status))){

                                        if (!empty($_FILES) && !empty($_FILES['car_category_image_add']) && $_FILES['car_category_image_add']['error'] == 0){
                                            saveImage('car_category',$id,$_FILES['car_category_image_add'],'image');
                                            deleteImage('car_category',$id,$oldCarCategoryImage);

                                        }

                                        header('refresh:0;url=/admin?r=car_category');
                                    }

                                require_once __DIR__. "/../view/car_category_form.php";
                            }

                        }

                        require_once __DIR__. "/../view/car_category_form.php";
                    }
                    require_once __DIR__. "/../view/car_category_form.php";
                }
            break;

            #CAR CATEGORY DELETE
            case 'car_category-delete':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id) && deleteCarCategory($id)){
                    header('refresh:0; url=/admin?r=car_category');
                }
            break;

            #CAR BRAND
            case 'car_brand':
                $getAllCarBrands = getAllCarBrandsBack();


                require_once __DIR__. "/../view/car_brand.php";
            break;

            #CAR BRAND ADD
            case 'car_brand-add':
                if (!empty($_POST)){
                    $title = $_POST['title'];
                    $status = $_POST['status'];

                    if (!empty($title) && !empty($status) || $status == 0){
                        if($carBrandId = addNewCarBrand($title,$status)){

                            if(!empty($_FILES) && !empty($_FILES['car_brand_add_image'])){
                                saveImage('car_brands',$carBrandId,$_FILES['car_brand_add_image'], 'image');

                            }

                            header('refresh:0;url=/admin?r=car_brand');

                        }
                    }
                }

                require_once __DIR__. "/../view/car_brand-form.php";
            break;

            #CAR BRAND EDIT
            case 'car_brand-edit':
                $id = !empty($_GET['id']) ? $_GET['id'] : null;

                if (!empty($id)){
                    $carBrandData = getAllCarBrandById($id);


                    if(!empty($carBrandData)){


                        $carBrandImage = getImage('car_brands', $id, $carBrandData['image']);
                        $oldCarBrandImage = $carBrandData['image'];
//                        debug($carCategoryImage);die();

                        if (!empty($_POST)){
                            $title = $_POST['title'];
                            $status = $_POST['status'];



                            if (!empty($title) && !empty($status) || !empty($status) == 0){



                                if(!empty(updateCarBrand($id,$title,$status))){

                                    if (!empty($_FILES) && !empty($_FILES['car_brand_add_image']) && $_FILES['car_brand_add_image']['error'] == 0){
                                        saveImage('car_brands',$id,$_FILES['car_brand_add_image'],'image');
                                        deleteImage('car_brands',$id,$oldCarBrandImage);

                                    }

                                    header('refresh:0;url=/admin?r=car_brand');
                                }

                                require_once __DIR__. "/../view/car_brand-form.php";
                            }

                        }

                        require_once __DIR__. "/../view/car_brand-form.php";
                    }
                    require_once __DIR__. "/../view/car_brand-form.php";
                }
                break;

            #CAR BRAND DELETE
            case 'car_brand-delete':

                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if (!empty($id) && deleteCarBrand($id)){
                    header('refresh:0;url=/admin?r=car_brand');
                }
            break;

            # DEFAULT
            default :
               require_once __DIR__. "/../view/error.php";
            break;
        }
    }else{
        require_once __DIR__ . "/../view/index.php";
    }




}else{

    $errorMessage = "";

    if(!empty($_POST)){
        $username = $_POST['login'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password)){

            if(login($username,$password)){

                header('refresh:0;url=/admin');die();
            }else{
                $errorMessage = "Login yoki parolni xato kiritdingiz!!!";
            }

        }else{
            $errorMessage = "Login va parol bo`sh!!!";
        }
    }

    require_once __DIR__ . "/../view/login.php";

}
