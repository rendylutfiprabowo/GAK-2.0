<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gerakan Ayo Kuliah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Vendor CSS Files -->
    <link href="/css/aos/aos.css" rel="stylesheet">
    <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/css/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/css/remixicon/remixicon.css" rel="stylesheet">
    <link href="/css/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a>GAK</a></h1>

            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <!-- .navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="/">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="/">Program Kerja</a></li>
                    <li><a class="nav-link   scrollto" href="/">Cerita Kami</a></li>
                    <li><a class="nav-link scrollto" href="/">Kepengurusan</a></li>
                    <li><a class="nav-link scrollto" href="/">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="/">Register</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>


        </div>
    </header>
    <!-- End Header -->


    <div class="contair" style="height: 73px; background-color: #37517e"></div>

    <section class="vh-80" style="padding-bottom: 80px; border-bottom-color: #37517e;  border-bottom-width: 0.5px;  border-bottom-style:solid;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h1 class="mb-3">Masuk</h1>
                    <p>Silahkan masuk menggunakan akun anda, jika belum ada akun silahkan klik <b>daftar</b>.</p>
                    <form role="form" class="text-start" method="post" action="/login/process">
                        <div class="form-group">
                            <label class="mb-1" for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="mb-1" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210917150049/eyeslash-300x240.png" width="1.8%" height="1%" style="margin-left: -5%;display:inline;
                vertical-align: middle" id="togglePassword">
                        </div>
                        <div class="text-center text-lg-start ">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="#!" class="link-danger">Daftar</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

 <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top" style="padding-top: 30px;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>GAK</h3>
                        <p>
                            <strong>Sekretariat PKH Provinsi Lampung</strong><br>
                            Jl. Basuki Rahmat No. 72, Sumur Putri, <br> Kec. Tlk. Betung Utara, Kota Bandarlampung,
                            Lampung 35212 <br><br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sitemap</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Program Kerja</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Cerita Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Kepengurusan</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Ikuti Kami</h4>
                        <div class="social-links mt-3">
                            <a href="/" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="/" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>GAK 2023</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/css/aos/aos.js"></script>
    <script src="/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/css/glightbox/js/glightbox.min.js"></script>
    <script src="/css/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/css/swiper/swiper-bundle.min.js"></script>
    <script src="/css/waypoints/noframework.waypoints.js"></script>
    <script src="/css/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>

</body>

</html>