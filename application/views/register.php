<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Chelsea Footwear - Register</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/assets_web/img/logo.jpeg">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
    .alert {
        margin-top: 10px;
    }
    </style>
</head>

<body class="register-page">
    <div class="register-box">
        <!-- <div class="register-logo">
            <a href="<?php echo base_url()?>Welcome"><b><img
                        src="<?php echo base_url()?>assets/assets_web/img/logo.png"></b></a>
        </div> -->
        <div class="register-box-body">
            <p class="login-box-msg">Register</p>
            <?php if (validation_errors() || $this->session->flashdata('result_register')) { ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('result_register'); ?>
            </div>
            <?php } ?>
            <?php echo form_open('register/proses'); ?>
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email" />
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="nama" class="form-control" placeholder="Name" />
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username" />
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" />
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="kelamin" class="form-control" placeholder="Kelamin" />
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" />
            </div>
            <div class="form-group has-feedback">
                <input type="number" name="hp" class="form-control" placeholder="Nomor HP" />

            </div>
            <div class="form-group has-feedback">
                <input type="date" name="hp" class="form-control" placeholder="Tanggal Lahir" />
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <a href="../login">Sudah Punya Akun?</a>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div><!-- /.col -->
            </div>
            </form>

        </div><!-- /.register-box-body -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>
</body>

</html>