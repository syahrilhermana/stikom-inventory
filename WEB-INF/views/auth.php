<?php
/**
 * Created by PhpStorm.
 * User: syahril
 * Date: 14/08/18
 * Time: 10:00
 */
$config = new Config();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Just for fun, just for task" name="description" />
    <meta content="Syahril Hermana" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo $config->base_url() ?>assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo $config->base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->base_url() ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo $config->base_url() ?>assets/js/modernizr.min.js"></script>

    <!-- jQuery  -->
    <script src="<?php echo $config->base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/waves.js"></script>
    <script src="<?php echo $config->base_url() ?>assets/js/jquery.slimscroll.js"></script>
</head>


<body class="bg-accpunt-pages">

<!-- HOME -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">
                    <?php include_once $content; ?>
                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->


<!-- App js -->
<script src="<?php echo $config->base_url() ?>assets/js/jquery.core.js"></script>
<script src="<?php echo $config->base_url() ?>assets/js/jquery.app.js"></script>

</body>
</html>