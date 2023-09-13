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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
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
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#latar-section" class="nav-link">Latar Belakang</a></li>
                <li><a href="#rumusan-section" class="nav-link">Rumusan Masalah</a></li>
                <li><a href="#fuzzyfication" class="nav-link">Fuzzyfication</a></li>
                <li><a href="#perhitungan" class="nav-link">Perhitungan</a></li>
                <li><a href="<?= base_url('perhitungan'); ?>" class="nav-link">Hasil</a></li>
              </ul>
            </nav>


            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>

          </div>


        </div>
      </div>

    </header>


    <div class="site-blocks-cover overlay bg-light" style="background-image: url('assets/images/hero_bg_1.jpg'); " id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 text-center align-self-center text-intro">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h1 class="font-weight-bold" data-aos="fade-up" data-aos-delay="">Fuzzy Logic</h1>
                <p class="lead " data-aos="fade-up" data-aos-delay="100">logika fuzzy adalah metodologi sistem kontrol pemecahan masalah yang cocok diterapkan pada sistem, mulai dari sistem yang sederhana sampai sistem yang rumit atau kompleks. Metodologi ini dapat diterapkan pada perangkat keras, perangkat lunak, atau kombinasi keduanya. Dalam Logika Klasik dinyatakan bahwa segala sesuatu bersifat biner, yang artinya adalah hanya dua kemungkinan yaitu “ya atau tidak”, “benar atau salah”, “baik atau buruk” dan lain-lain (Irawan & Herviana, 2019)</p>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>



    <div class="site-section" id="latar-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title" data-aos="fade-left" data-aos-delay="">Latar Belakang</h2>
          </div>
          <div class="col-lg-8" data-aos="fade-left" data-aos-delay="">
            <p>Pada sektor pertanian, tanah merupakan faktor yang berperan sangat penting dalam menentukan usaha pertanian. Setiap daerah memiliki tingkat kesuburan tanah yang berbeda - beda dan tergantung dari jenis tanah dan letak geografis suatu daerah. Kesuburan tanah merupakan salah satu faktor penentu keberhasilan usaha pertanian. </p>

            <p>Namun ada kalanya banyak usaha pertanian yang gagal atau hasil tidak maksimal karena kurangnya pemahaman tentang tingkat kesuburan tanah meraka untuk jenis tanaman tepat dan sesuai dengan sampel tanah dari petani sendiri. Kurangnya pengetahuan dan pemahaman petani akan tingkat kesuburan tanah yang tidak sama satu sama lain untuk ditanami jenis tanaman yang tepat membuat petani kesulitan dalam menentukan jenis tanaman yang tepat untuk para petani tanam.</p>
          </div>
          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="">
            <img src="<?= base_url('assets'); ?>/images/latarBelakang.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="rumusan-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title">Rumusan masalah</h2>
          </div>
          <div class="col-lg-4" data-aos="fade-left" data-aos-delay="">
            <img src="<?= base_url('assets'); ?>/images/rumusanMasalah.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-8" data-aos="fade-right" data-aos-delay="">
            <p>Berdasarkan analisa dan pengamatan yang penulis lakukan daerah Pasaman Barat terdapat beberapa masalah yang dapat penulis rumuskan sebagai berikut</p>
            <ul>
              <li>
                Bagaimana pengukuran kesuburan tanah dan keasaman tanah dalam menentukan kelayakan penanaman sawit di Pasaman Barat?
              </li>
              <li>
                Bagaimana menerapkan Fuzzy Logic dapat mengukur tingkat kesuburan dan keasaman tanah dalam penentuan kelayakan penanaman sawit di Pasaman Barat?
              </li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="site-section" id="fuzzyfication">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Fuzzyfication</h2>
          </div>
          <?php
          foreach ($data as $key => $value) {
            # code...
          ?>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
              <div class="service d-flex h-100">
                <div class="service-about">
                  <h3><?= $value['Nama']; ?></h3>
                  <p><?= $value['Keterangan']; ?></p>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

        </div>
      </div>
    </div>


    <section class="site-section block__62272 bg-light" id="perhitungan">


      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">Proses Perhitungan</h2>
          </div>
          <div class="col-md-12">
            <div class="card" data-aos="fade-up" data-aos-delay="">
              <?php echo form_open(route_to('fuzzy'), 'method="post" id="form-perhitungan" class="p-5"') ?>
              <div class="form-group">
                <label class="text-black">Nama Daerah</label>
                <input type="text" class="form-control" name="Daerah" placeholder="Alamat / Daerah " required>
              </div>
                 <div class="form-group">
                    <label class="text-black">Jenis Tanah</label>
                    <select name="JenisTanah" class="form-control" id="">
                      <option value="Pilih">Pilih</option>
                      <option value="Andosol">Andosol</option>
                      <option value="Organosol">Organosol</option>
                      <option value="Regosol">Regosol</option>
                    </select>
                  </div>
              <hr>
              <div class="form-group">
                <label class="text-black">C- Organik (%)</label>
                <input type="number" step="0.01" class="form-control" name="varA" placeholder="Nilai C- Organik (%)" required>
              </div>
              <div class="form-group">
                <label class="text-black">P2O5 HCL (mg/100g)</label>
                <input type="number" step="0.01" class="form-control" name="varB" placeholder="Nilai P2O5 HCL (mg/100g)" required>
              </div>
              <div class="form-group">
                <label class="text-black">K2O HCL</label>
                <input type="number" step="0.01" class="form-control" name="varC" placeholder="Nilai K2O HCL" required>
              </div>
              <div class="form-group">
                <label class="text-black">Kejenuhan Basa (%)</label>
                <input type="number" step="0.01" class="form-control" name="varD" placeholder="Nilai Kejenuhan Basa (%)" required>
              </div>
              <div class="form-group">
                <label class="text-black">KTK (me/100g)</label>
                <input type="number" step="0.01" class="form-control" name="varE" placeholder="Nilai KTK (me/100g)" required>
              </div>
              <div class="form-group">
                <label class="text-black">pH H2O</label>
                <input type="number" step="0.01" class="form-control" name="varF" placeholder="Nilai pH H2O" required>
              </div>
              <button type="submit" class="btn btn-success btn-block">Hitung</button>
              <?= form_close(); ?>
            </div>
          </div>
        </div>
      </div>

    </section>

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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="<?= base_url('assets'); ?>/js/main.js"></script>
  <script>
    $(document).ready(function() {
      $('#form-perhitungan').submit(function(e) {
        e.preventDefault();
        var form = this;
        axios({
            method: $(form).attr('method'),
            url: $(form).attr('action'),
            data: new FormData(form),
          }).then(function(response) {
            console.log(response.data);
            // Swal.fire({
            //   icon: 'success',
            //   title: 'Berhasil',
            // })
            window.location.href = "<?= base_url('perhitungan/detail/'); ?>" + response.data.PerhintunganID;
          })
          .catch(function(error) {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: error.response.data,
            })
            console.log(error.response.data);
          });

      });
    });
  </script>
</body>

</html>