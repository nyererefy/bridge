<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nyererefy Bridge</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>public/css/main.css" rel="stylesheet">

    <!-- When placed here script from included view will work-->
    <script src="<?= base_url() ?>public/vendor/jquery/jquery.min.js"></script>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">Nyererefy Bridge</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if (is_login()) { ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about">About</a>
                </li>
                <?php if (is_login()) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>settings">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>login/logout">Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>login">Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <!-- Dynamic view are rendered here -->
    <div class="row text-center">
        <?php include 'i_alert.php' ?>

        <?php $this->load->view($view) ?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-3 bg-dark fixed-bottom">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Nyererefy 2017-<?= date("Y") ?></p>
        <p class="m-0 text-center text-white">This is an open source application, Source code is available on
            <a href="https://github.com/nyererefy/bridge">Github</a>
        </p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
