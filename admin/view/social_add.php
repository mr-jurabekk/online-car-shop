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
                        <h1 class="m-0">Ijtimoiy tarmoqlar <?= (!empty($_GET['r']) && $_GET['r'] == '') ? 'Qo`shish' : "Tahrirlash" ?>!</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item"><a href="/admin?r=menu">Ijtimoiy tarmoq</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Ijtimoiy tarmoq <?=(!empty($_GET['r']) && $_GET['r'] == 'social-links-add') ? 'Qo`shish' : "Tahrirlash"?></li>
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

                    <input type="hidden" name="id" value="<?=(!empty($getSocialLinksById)) ? $getSocialLinksById['id'] : ''?>">

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
                                                    <label for="title">Name</label>
                                                    <input type="text" required id="title" class="form-control" name="name" placeholder="Name" value="<?=(!empty($getSocialLinksById)) ? $getSocialLinksById['name']: ''?>">
                                                </div>

                                        <div class="mb-3">
                                            <label for="icon">Icon class</label>
                                            <input type="text" required id="icon" class="form-control" name="icon_class" placeholder="Icon class" value="<?=(!empty($getSocialLinksById)) ? $getSocialLinksById['icon_class']: ''?>">
                                            <div>
                                                    <label for="link">Link</label>
                                                    <input type="text" required id="link" class="form-control" name="link" placeholder="Link" value="<?=(!empty($getSocialLinksById)) ? $getSocialLinksById['link']: ''?>">
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label for="position">Position</label>
                                        <input type="text" required id="position" class="form-control" name="position" placeholder="Position" value="<?=(!empty($getSocialLinksById)) ? $getSocialLinksById['position']: ''?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <input type="text" required id="status" class="form-control" name="status" placeholder="Status" value="<?=(!empty($getSocialLinksById)) ? $getSocialLinksById['status']: ''?>">
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