<!doctype html>
<html lang="en">

<head>
    <title>Fuzz Logic</title>
    <meta charset="utf-8">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="<?= base_url('assets') ?>/images/flaticon/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        .site-blocks-cover,
        .site-blocks-cover>.container>.row {
            min-height: 300px;
            height: calc(32vh);
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-4">
                        <h1 class="m-0 site-logo"><a href="<?= base_url('/'); ?>">Logic</a></h1>
                    </div>

                    <div class="col-8">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="<?= base_url('/'); ?>" class="nav-link">Home</a></li>
                                <li><a href="#hasil" class="nav-link">Hasil</a></li>
                            </ul>
                        </nav>


                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>

                    </div>


                </div>
            </div>

        </header>

        <div class="site-section bg-light" id="hasil">
            <div class="container">
                <div class="row ">
                    <div class="col-12 mb-4 position-relative">
                        <h2 class="section-title" data-aos="fade-left" data-aos-delay="">Fuzzyfication</h2>

                    </div>
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col"><a href="<?= base_url('admin/fuzzyfication/tambah/0'); ?>" class="btn btn-primary">Tambah</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data as $value) {
                                    ?>
                                        <tr>
                                            <td><?= @$no++; ?></td>
                                            <td><?= @$value['Nama']; ?></td>
                                            <td><?= @$value['Keterangan']; ?></td>
                                            <td><a href="<?= base_url('admin/fuzzyfication/tambah/') . $value['FuzzyficationID']; ?>" class="btn mb-1 btn-info"><i class="ri-edit-box-fill"></i></a><a href="<?= base_url('admin/fuzzyfication/delete/') . $value['FuzzyficationID']; ?>" class="btn btn-info"><i class="ri-delete-bin-2-fill"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('_templates/footer.php') ?>

    </div> <!-- .site-wrap -->

    <script src="<?= base_url('assets'); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery-ui.js"></script>
    <script src="<?= base_url('assets'); ?>/js/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('assets'); ?>/js/aos.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.sticky.js"></script>
    <script src="<?= base_url('assets'); ?>/js/isotope.pkgd.min.js"></script>


    <script src="<?= base_url('assets'); ?>/js/main.js"></script>
</body>

</html>