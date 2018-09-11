<?php
session_start();
    if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KB03</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet">
    <link href="css/freelancer.min.css" rel="stylesheet">
    <!-- Plugin CSS -->  
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Miden Tries</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Video</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
          <h1 class="text-uppercase mb-0">Welcome To KB03</h1>
          <hr class="star-light">
          <h2 class="font-weight-light mb-0">Persahabatan - Ghibah - Pertengkaran Cinta</h2>
          <img class="img-fluid mb-5 d-block mx-auto mt-3" src="img/1.jpg" alt="4kb03">           
        </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
        <div class="container-fluid pb-video-container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Video Kenangan</h2>
            <hr class="star-dark mb-5">
            <div class="row pb-row">
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/QYlUnkJeBno?ecver=2"></iframe>
                    <label class="form-control label-warning text-center">King Apoy</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/SoTdoZottHM?ecver=2" frameborder="0" allowfullscreen ></iframe>
                    <label class="form-control label-warning text-center">Lutfi - Maung Kemarahan</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/_DNPsPGo5cU?ecver=2" frameborder="0" allowfullscreen ></iframe>
                    <label class="form-control label-warning text-center">Vape Master</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/f3dBgfY5dKA" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Auto Roof</label>
                </div>
            </div>
            <div class="row pb-row">
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/yVAmf7Cabno" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Tapta</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://oload.stream/embed/DXbC_z9dkSg" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Okep Lord Satan</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/GmnEg5D06Ho?ecver=2" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Battle Vape</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/X0Vuw8tpUeA?ecver=2" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Bungsu Penguasa Cupang</label>
                </div>
            </div>
            <div class="row pb-row">
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/smwhgK-THpM?ecver=2" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Tutorial Vape</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/w4ingInQ7zM?ecver=2" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Ngko Gelodok</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Ym09u9Sr9ko" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Digidaw</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/zPomtDuflJA?ecver=2" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Tapta Part 2</label>
                </div>
            </div>
            <div class="row pb-row">
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/iq6Ws986FQk" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Susu beruang asli</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/WkXtB_Il3sg" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Paman Singing</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/giPROPjJrzk" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Calon</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/zPomtDuflJA?ecver=2" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Tapta Part 2</label>
                </div>
            </div>
        </div>
    </section>
    <!-- end Video -->
    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">About KB03</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">tentang kb3 apa ya males ah panjang</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">kalo ada ide kirim line ae tentang kb3</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
</body>

</html>