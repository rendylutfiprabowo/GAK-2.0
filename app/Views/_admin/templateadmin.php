<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/img/hero-img.png" style="background-color: white; border-radius: 25px;">
    <title>
        Gerakan Ayo Kuliah || <?= $title; ?>
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="/assets/material/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/material/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="/assets/material/assets/css/material-dashboard.min.css?v=3.0.6" rel="stylesheet" />
</head>



<body class="g-sidenav-show bg-gray-200">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <a class="navbar-brand m-0" href="#" target="_blank">
                <img src="/img/hero-img.png" style="background-color: white; border-radius: 25px;" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Gerakan Ayo Kuliah</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link text-white " href="/AdminDashboard">
                        <i class="material-icons">dashboard</i>
                        <span class="sidenav-normal  ms-3  ps-1">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="/PKHLolosPTN">
                        <i class="material-icons">people</i>
                        <span class="sidenav-normal  ms-3  ps-1">PKH Lolos PTN</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="/logout">
                        <i class="material-icons">input</i>
                        <span class="sidenav-normal  ms-3  ps-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page"> <?= $title; ?> / <?= $title2; ?></li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0"> <?= $title; ?> / <?= $title2; ?></h6>
                </nav>
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                    <a href="javascript:;" class="nav-link text-body p-0">

                        <div class="sidenav-toggler-inner" onclick="navbarMinimize(this)">
                            <i class="material-icons">view_headline</i>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">

                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <!-- dark mode -->
                        <div class="nav-item  px-3">
                            <div class="form-check form-switch ps-0 ms-auto my-auto">
                                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                            </div>
                        </div>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- template area  -->
        <?= $this->renderSection('content') ?>
        <!-- end template area  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 position-relative z-index-2">
                    <footer class="footer  ">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 mb-lg-0 mb-4">

                                    <div class="copyright text-center text-sm text-muted text-lg-start">
                                        © <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> by
                                        <a class="font-weight-bold" target="_blank">Bakrie Center Foundation | Gerakan Ayo Kuliah Lampung 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="/assets/material/assets/js/core/popper.min.js"></script>
<script src="/assets/material/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/material/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/material/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/assets/material/assets/js/plugins/chartjs.min.js"></script>
<script src="/assets/material/assets/js/plugins/dragula/dragula.min.js"></script>
<script src="/assets/material/assets/js/plugins/jkanban/jkanban.js"></script>



<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="/assets/material/assets/js/material-dashboard.min.js?v=3.0.6"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"79dce2022c384a9b","version":"2023.2.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>