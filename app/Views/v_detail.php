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


    <div class="site-blocks-cover overlay bg-light" style="background-image: url('assets/images/hero_bg_1.jpg'); " id="">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h1 class="font-weight-bold" data-aos="fade-up" data-aos-delay="">Hasil Perhitungan</h1>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>



    <div class="site-section bg-light" id="hasil">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title" data-aos="fade-left" data-aos-delay="">Input</h2>
          </div>
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="">
            <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">C- Organik (%)</th>
                    <th scope="col">P2O5 HCL (mg/100g)</th>
                    <th scope="col">K2O HCL</th>
                    <th scope="col">Kejenuhan Basa (%)</th>
                    <th scope="col">KTK (me/100g)</th>
                    <th scope="col">pH H2O</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= $Perhitungan['VarA']; ?></td>
                    <td><?= $Perhitungan['VarB']; ?></td>
                    <td><?= $Perhitungan['VarC']; ?></td>
                    <td><?= $Perhitungan['VarD']; ?></td>
                    <td><?= $Perhitungan['VarE']; ?></td>
                    <td><?= $Perhitungan['VarF']; ?></td>

                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" id="hasil1">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title" data-aos="fade-left" data-aos-delay="">Output</h2>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
            <h5>Mesin Inferesi (Fungsi MIN)</h5>
            <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Rule</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach (json_decode($Hasil['Hitung1']) as $rule1 => $vaR1) {
                  ?>
                    <tr>
                      <td><?= $rule1; ?></td>
                      <td><?= $vaR1; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
            <h5>Defuzzyfikasi</h5>
            <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Rule</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach (json_decode($Hasil['Hitung2']) as $rule2 => $vaR2) {
                  ?>
                    <tr>
                      <td><?= $rule2; ?></td>
                      <td><?= $vaR2; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-12 mt-5" data-aos="fade-up" data-aos-delay="">
            <h5>Hasil Akhir</h5>
            <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">Daerah</th>
                    <th scope="col">Jenis Tanah</th>
                    <th scope="col">Ph Tanah</th>
                    <th scope="col">Kesuburan Tanah</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= @$Daerah; ?></td>
                    <td><?= @$TanahSubur; ?></td>
                    <td><?= @$PhTanah->Nama; ?></td>
                    <td><?= json_decode($Hasil['Hitung3'])->Z1; ?>(<?= $KeTanah->Nama; ?>)</td>
                  </tr>
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