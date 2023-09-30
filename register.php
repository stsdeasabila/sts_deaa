<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REGISTER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://karyasiswa.site/public/assets/img/favicon.png" rel="icon">
  <link href="https://karyasiswa.site/public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="https://karyasiswa.site/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://karyasiswa.site/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://karyasiswa.site/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://karyasiswa.site/public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="https://karyasiswa.site/public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="https://karyasiswa.site/public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://karyasiswa.site/public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="https://karyasiswa.site/public/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="https://karyasiswa.site/public/assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body >

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="https://karyasiswa.site/" class="logo d-flex  w-auto">
                </a>
              </div>
              <!-- tampilkan pesan error -->
                            <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">REGISTER</h5>
                    <h5 class="card-title text-center pb-0 fs-4">BELAJAR KODING</h5>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="http://localhost/sts_dea/Dashboard.php">
                    <div class="col-12 has-validation" >
                      <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" name="NamaLengkap" class="form-control" id="NamaLengkap" value="" >
                      <div class="invalid-feedback">Please, enter your Nama Lengkap!</div>
                    </div>  
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" name="Email" class="form-control" id="Email" value="">
                      <div class="invalid-feedback">Please, enter your Email!</div>
                    </div>

                    <div class="col-12">
                      <label for="Username" class="form-label">Username</label>
                      <input type="text" name="Username" class="form-control" id="Username" value="">
                      <div class="invalid-feedback">Please enter a valid Username!</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <div class="input-group has-validation">
                        <input type="text" name="password" class="form-control" id="password" value="">
                        <div class="invalid-feedback">Please choose a password.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="TempatLahir" class="form-label">Tempat Lahir</label>
                      <input type="text" name="TempatLahir" class="form-control" id="TempatLahir" value="">
                      <div class="invalid-feedback">Please enter your Tempat Lahir!</div>
                    </div>

                    <div class="col-12">
                      <label for="TanggalLahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" name="tanggallahir" class="form-control" id="TanggalLahir" value="">
                      <div class="invalid-feedback">Please enter your Tanggal Lahir!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-info w-100" type="submit">LOGIN</button>
                    </div>

                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://karyasiswa.site/public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="https://karyasiswa.site/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://karyasiswa.site/public/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="https://karyasiswa.site/public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="https://karyasiswa.site/public/assets/vendor/quill/quill.min.js"></script>
  <script src="https://karyasiswa.site/public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="https://karyasiswa.site/public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://karyasiswa.site/public/assets/vendor/php-email-form/validate.js"></script>

  <script src="https://karyasiswa.site/public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <!-- Template Main JS File -->
  <script src="https://karyasiswa.site/public/assets/js/main.js"></script>

</body>

</html>