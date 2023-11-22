<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Kasir</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body class="hold-transition login-page ">
    <div class="login-box col align-self-center">
        <div class="login-logo">
            <b><i class="fa-brands fa-opencart"></i>Kasir</a></b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body col-md-12 col-sm-12 col-xs-12 ">
            <p class="login-box-msg">Silahkan Login Terlebih Dahulu Baginda</p>

            <form action="<?= site_url('auth/process') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username" required oninvalid="this.setCustomValidity('isi broh!')" oninput="this.setCustomValidity('')" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('isi juga lah!')" oninput="this.setCustomValidity('')">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4 ">
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</body>

</html>