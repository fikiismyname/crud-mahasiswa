<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo e(url('css/mdb.min.css')); ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet">
    <!-- Sennajs -->
    <script type="text/javascript" src="<?php echo e(url('js/build/globals/senna-debug.js')); ?>"></script>
</head>

<body data-senna data-senna-surface>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top primary-color">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">fikiismyname</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/about')); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/mahasiswa')); ?>">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/students')); ?>">Students</a>
                    </li>

                </ul>
                <!-- Links -->

            </div>
            <!-- Collapsible content -->
        </div>
    </nav>
    <!--/.Navbar-->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo e(url('js/jquery-3.4.1.min.js')); ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo e(url('js/popper.min.js')); ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo e(url('js/mdb.min.js')); ?>"></script>
    <!-- pacejs -->
    <script type="text/javascript" src="<?php echo e(url('js/pace.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\project\crud-mahasiswa\resources\views/layout/main.blade.php ENDPATH**/ ?>