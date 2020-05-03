<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body style="background-color: rgb(30,106,221);">
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-search">
        <div class="container-fluid"><a class="navbar-brand" href="/" style="background-image: url(&quot;assets/img/lo.png&quot;);background-repeat: no-repeat;background-size: cover;width: 150px;height: 20px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item active" role="presentation">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item active" role="presentation">
                    <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item active" role="presentation">
                    <a class="nav-link" href="/visi-misi">Visi &amp; Misi</a>
                </li>
                <li class="nav-item active" role="presentation">
                    <a class="nav-link" href="/penggalangan">Penggalangan</a>
                </li>
                <li class="nav-item active" role="presentation">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
            <form class="form-inline text-left text-dark ml-auto" method="get" target="_blank">
                <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" placeholder="Search" id="search-field"></div>
            </form><button class="btn btn-primary" type="button">Search</button></div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
    @yield('konten')

    <!-- Start: Footer Clean -->
    <div class="footer-clean" >
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Start: Services -->
                    <div class="col-sm-2 pt-3">
                        <h3>Pihak Terkait</h3>
                        <ul>
                            <li><a href="#">Panti Asuhan</a></li>
                            <li><a href="#">RifConcept</a></li>
                            <li><a href="#">Pondok Pesantren</a></li>
                        </ul>
                    </div>
                    <!-- End: Services -->
                    <!-- Start: About -->
                    <div class="col-sm-2 pt-3">
                        <h3>Tentang Kami</h3>
                        <ul>
                            <li><a href="/">SalurkanDana.id</a></li>
                            <li><a href="/tentangkami/team">Team kami</a></li>
                            <li><a href="/visimisi">Visi &amp; Misi</a></li>
                        </ul>
                    </div>
                    <!-- End: About -->
                    <!-- Start: Careers -->
                    <div class="col-sm-2 pt-3">
                        <h3>Kontak Kami</h3>
                        <ul>
                            <li><a href="#">+6289662279662</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 flex-wrap-reverse pt-3">
                        <h3>
                            SalurkanDana.id
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col item social">
                        <a href="#">
                            <i class="icon ion-social-facebook"></i>
                        </a>
                        <a href="#"><i class="icon ion-social-twitter"></i>
                        </a>
                        <a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i>
                        </a>
                        <p class="copyright">SalurkanDana © 2020</p>
                    </div>
                </div>
            </div>


        </footer>
    </div>
    <!-- End: Footer Clean -->
    <!-- Start: Sidebar -->
    <div></div>
    <!-- End: Sidebar -->
    <footer></footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>




