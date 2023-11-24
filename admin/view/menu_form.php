<?php require_once "section/header.php"?>

<?php require_once "section/navbar.php"?>

<?php require_once "section/sidebar.php"?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Menu <?= (!empty($_GET['r']) && $_GET['r'] == 'menu-edit') ? 'Tahrirlash' : "Qo`shish" ?>!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item"><a href="/admin?r=menu">Menu</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Menu <?=(!empty($_GET['r']) && $_GET['r'] == 'menu-edit') ? 'Tahrirlash' : "Qo`shish"?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <form method="post">

                    <input type="hidden" name="id" value="<?=(!empty($menuData)) ? $menuData['id'] : ''?>">

                    <div class="row">

                        <?php if(!empty($errorMessage)): ?>

                            <div class="col-md-12 mb-1">
                                <div class="alert alert-danger"><?=$errorMessage?></div>
                            </div>

                        <?php endif; ?>

                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" required id="title" class="form-control" name="title" placeholder="Title" value="<?=(!empty($menuData)) ? $menuData['title']: ''?>">
                                    </div>

                                    <div>
                                        <label for="link">Link</label>
                                        <input type="text" required id="link" class="form-control" name="link" placeholder="Link" value="<?=(!empty($menuData)) ? $menuData['link']: ''?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label for="position">Position</label>
                                        <input type="text" required id="position" class="form-control" name="position" placeholder="Position" value="<?=(!empty($menuData)) ? $menuData['position']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="order_by">Order by</label>
                                        <input type="text" required id="order_by" class="form-control" name="order_by" placeholder="Order by" value="<?=(!empty($menuData)) ? $menuData['order_by']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="parent">Parent</label>
                                        <input type="text" required id="parent" class="form-control" name="parent" placeholder="Parent" value="<?=(!empty($menuData)) ? $menuData['parent']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="text" required id="status" class="form-control" name="status" placeholder="Status" value="<?=(!empty($menuData)) ? $menuData['status']: ''?>">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="btn btn-success">Saqlash</button>
                        </div>

                    </div>

                </form>

            </div>
        </section>

    </div>








<?php require_once "section/footer.php"?>