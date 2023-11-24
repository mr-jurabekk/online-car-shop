<?php require_once 'sections/header.php';?>


    <main class="main">

        <div class="site-breadcrumb")>
            <div class="container">
                <h2 class="breadcrumb-title"><?=$pageData['title'];?></h2>
                <ul class="breadcrumb-menu">
                    <li>
                        <a href="<?=FRONTEND?>">Asosiy</a>
                    </li>
                    <li class="active"><?=$pageData['title'];?></li>
                </ul>
            </div>
        </div>

        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">

                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-calendarr"></i><?=date('d.m.Y', strtotime($pageData['created_date']))?></li>
                                                <li><i class="far fa-eye"></i><?=$pageData['seen_count']?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20"><?=$pageData['title']?></h3>

                                        <div class="page-body">
                                            <?=$pageData['body']?>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <div class="widget search">
                                <h5 class="widget-title">Search</h5>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Search Here...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </main>


<?php require_once 'sections/footer.php'; ?>
