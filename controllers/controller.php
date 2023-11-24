<?php

require_once __DIR__ . "/../models/model.php";

$allMenus = generateMenuElements(HEADER_MENU);
$allFooterMenus = generateMenuElements(FOOTER_MENU);




$router = (!empty($_GET['route'])) ? $_GET['route']: null;
if(!empty($router)){
    switch ($router){
        case 'car-view':
            if(!empty($_SESSION['alert']) && $_SESSION['alert']['status'] = 1){
                unset($_SESSION['alert']);
            }
            if(!empty($_GET['id'])){
                $id = $_GET['id'];
                $carData = getCarById($id);

                if(!empty($carData)){

                    $categoryData = getDataByCarCategory($carData['category_id']);
                    require_once __DIR__. "/../view/car_view.php";
                }else{
                    require_once __DIR__. "/../view/404.php";
                }

            }else{
                require_once __DIR__. "/../view/404.php";
            }

        break;

        case 'car_category':
            $id = $_GET['id'];
            $categoryData = getDataByCarCategory($id);


            if(empty($_GET['sort'])){
                $_GET['sort'] = 'name-asc';

            }
            if(empty($_GET['view'])){
                $_GET['view'] = 'list';
            }


            if(!empty($_GET['sort'])){
                $categoryCars = getAllCarsByCategoryId($id, $_GET['sort']);
            }else{
                $categoryCars = getAllCarsByCategoryId($id);
            }

            require_once __DIR__. "/../view/car_category.php";
            break;

        case 'news-blog':
            if(!empty($_GET['id'])){
                $id = $_GET['id'];
                $allNews = getAllNews();

                if(!empty($allNews)){

                    $allNewsId = getNewsById($allNews['id']);
                    require_once __DIR__. "/../view/news-blog.php";
                }else{
                    require_once __DIR__. "/../view/404.php";
                }

            }else{
                require_once __DIR__. "/../view/404.php";
            }
        break;

        case 'page-view':
            $id = (!empty($_GET['id'])) ? $_GET['id'] : null;

            if(!empty(($id))){
                $pageData = getPageDataById($id);
                if(!empty($pageData)){

                    addSeenCount('page', $id);

                    require_once __DIR__ . "/../view/page-view.php";
                }else{
                    require_once __DIR__. "/../view/404.php";
                }
            }else{
                require_once __DIR__. "/../view/404.php";
            }
        break;

        case 'order-form':
            $carId = !empty($_GET['car_id']) ? $_GET['car_id'] : null;

            if (!empty($carId)){
                $carData = getCarById($carId);

                if (!empty($carData)){
                    $carImage = getImage('car',$carId,$carData['image']);
                    $qty = !empty($_GET['qty']) ? $_GET['qty'] : 1;

                    if (!empty($_POST)){
                        $car_id = $_POST['car_id'];
                        $qty = $_POST['qty'];
                        $total_sum = $_POST['total_sum'];
                        $name = $_POST['ismi'];
                        $phone = $_POST['telefon_raqami'];

                        if(!empty($car_id) && !empty($qty) && !empty($total_sum) && !empty($name) && !empty($phone)){
                            if (newOrder($car_id,$qty,$total_sum,$name,$phone)){
                                $_SESSION['alert']['success'] = "Buyurtmangiz muvaffaqiyatli ro`yxatga olindi. Tez orada menedjer siz bilan bog`lanadi.";
                                $_SESSION['alert']['seen_status'] = 0;
                                header('refresh:0;url=/?route=car-view&id='.$carId);

                            }
                        }
                    }
                    require_once __DIR__. "/../view/order-form.php";
                }else{
                    require_once __DIR__. "/../view/404.php";
                }

            }else{
                require_once __DIR__. "/../view/404.php";
            }

        break;

        case 'order-action':
            if (!empty($_POST)){
                debug($_POST);die();
                $car_id = $_POST['car_id'];
                $qty = $_POST['qty'];
                $total_sum = $_POST['total_sum'];
                $name = $_POST['ismi'];
                $phone = $_POST['telefon_raqami'];

                if(!empty($car_id) && !empty($qty) && !empty($total_sum) && !empty($name) && !empty($phone)){
                    if (newOrder($car_id,$qty,$total_sum,$name,$phone)){
                        $_SESSION['alert']['success'] = "Buyurtmangiz muvaffaqiyatli ro`yxatga olindi. Tez orada menedjer siz bilan bog`lanadi.";
                        $_SESSION['alert']['seen_status'] = 0;
                        header('refresh:0;url=/?route=car-view&id='.$carId);

                    }
                }
            }
        break;

        default:
            require_once __DIR__. "/../view/404.php";
        break;
    }
}else{

    $allSocialLinks = generateSocialLinks();

    $allSocialLinksFooter = generateSocialLinksF();

    $allSlider = getAllSlider();

    $allCounterArea = getAllCounter();

    $allCars = getAllCars();

    $allCategoryCars = getAllCategory();

    $allCarBrands = getAllCarBrands();

    $allTestimonials = getAllTestimonial();

    $allNews = getAllNews();

    require_once __DIR__. "/../view/index.php";

}


