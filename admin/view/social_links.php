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
                        <h1 class="m-0">Ijtimoiy tarmoqlar</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Asosiy</a></li><span>/</span>
                            <li class="breadcrumb-item-active">Ijtimoiy tarmoqlar</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">

                        <a href="?r=social-links-add" class="btn btn-success mb-4">Yangi ijtimoiy tarmoq qo`shish</a>

                        <table class="table table-bordered table-striped">

                            <thead class="bg-light">

                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Icon class</th>
                                <th>Link</th>
                                <th>Position</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php if(!empty($allSocialLinks)):?>
                                <?php foreach ($allSocialLinks as $key => $allSocialLink): ?>

                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $allSocialLink['name'] ?></td>
                                        <td><?= $allSocialLink['icon_class'] ?></td>
                                        <td><?= $allSocialLink['link'] ?></td>
                                        <td><?= $allSocialLink['position'] ?></td>
                                        <td><?= $allSocialLink['status'] ?></td>
                                        <td>
                                            <a href="?r=social-links-edit&id=<?=$allSocialLink['id']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="?r=social-links-delete&id=<?=$allSocialLink['id']?>" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            <?php endif; ?>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </section>

    </div>








<?php require_once "section/footer.php"?>