<?php require_once "section/login_header.php"?>

<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1 class="h1">Avto admin</h1>
        </div>
        <div class="card-body">

            <?php if(!empty($errorMessage)): ?>


                <div class="alert alert-danger"><?= $errorMessage ?></div>

            <?php endif;?>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input name="login" type="text" class="form-control" placeholder="user">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<?php require_once "section/login_footer.php"?>
