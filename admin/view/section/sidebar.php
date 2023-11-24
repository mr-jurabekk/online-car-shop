<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=ADMIN?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Avto admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=ADMIN?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=$user['fio'];?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Jadvallar</li>

                <li class="nav-item">
                    <a href="?r=menu" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Menyular
                            <span class="badge badge-info right"><?=getTotalCount('menu')?></span>
                        </p>
                    </a>
                </li>


                <!--       Social link         -->
                <li class="nav-item">
                    <a href="?r=social_links" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-globe"></i>
                        <p>
                            Ijtimoiy tarmoqlar
                            <span class="badge badge-info right"><?=getTotalCount('social_links')?></span>
                        </p>
                    </a>
                </li>

                <!--   Slayder    -->
                <li class="nav-item">
                    <a href="?r=slider" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Slaydlar
                            <span class="badge badge-info right"><?=getTotalCount('slider')?></span>
                        </p>
                    </a>
                </li>

                <!--  Car  -->
                <li class="nav-item">
                    <a href="?r=car" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Mashinalar
                            <span class="badge badge-info right"><?=getTotalCount('car')?></span>
                        </p>
                    </a>
                </li>

                <!--  CAR CATEGORY  -->
                <li class="nav-item">
                    <a href="?r=car_category" class="nav-link">
                        <i class="nav-icon fas fa-duotone fa-car"></i>
                        <p>
                            Mashina turlari
                            <span class="badge badge-info right"><?=getTotalCount('car_category')?></span>
                        </p>
                    </a>
                </li>

                <!--  CAR BRAND  -->
                <li class="nav-item">
                    <a href="?r=car_brand" class="nav-link">
                        <i class="nav-icon fas fa-duotone fa-car"></i>
                        <p>
                            Mashina Brendlari
                            <span class="badge badge-info right"><?=getTotalCount('car_brands')?></span>
                        </p>
                    </a>
                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>