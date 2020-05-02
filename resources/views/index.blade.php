@extends('master')
@section('judul','SalurkanDana.id')
@section('konten')
<!-- Start: Highlight Blue -->
<div class="shadow highlight-blue" data-bs-parallax-bg="true" style="background-color: rgba(0,0,0,0.23);background-image: url(&quot;assets/img/product-aeon-feature.jpg&quot;);">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">Mari Beri Kebaikan Ke Semua Orang</h2>
            <p class="text-center">Kami Hadir Untuk Membantu Dan menyalurkan bantuan anda kepada &nbsp;Sodara-Sodara Kita Yang Sangat Membutuhkan</p>
        </div>
        <!-- End: Intro -->
        <!-- Start: Buttons -->
        <div class="buttons">
            <a class="btn btn-primary" role="button" href="/tentang-kami">TENTANG KAMI</a>
        </div>
        <!-- End: Buttons -->
    </div>
</div>
<!-- End: Highlight Blue -->
<!-- Start: Features Boxed -->
<div class="features-boxed bg-light">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">Tujuan Penggalangan Dana</h2>
            <p class="text-center">Kami Berkomitmen Agar Dana Yang Anda Sumbangkan <br>Benar-Benar Tepat Sasaran.&nbsp;<br>Kami Bekerja Sama Dengan Lembaga Lembaga Yang Terpercaya.&nbsp;<br>Sehingga Tidak Akan Terjadi Penyelewengan Dana.<br></p>
        </div>
        <!-- End: Intro -->
        <!-- Start: Features -->
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="border rounded shadow box" data-aos="zoom-out-up" data-aos-duration="250" data-aos-delay="200">
                    <i class="fa fa-map-marker icon"></i>
                    <h3 class="name">
                        Korban Bencana Alam
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.
                    </p>
                    <a href="/penggalangan/donasi" class="learn-more">
                        Learn more »
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="border rounded shadow box" data-aos="zoom-out-up" data-aos-duration="450" data-aos-delay="200">
                    <i class="fa fa-child icon"></i>
                    <h3 class="name">
                        Anak Yatim
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.
                    </p>
                    <a href="#" class="learn-more">
                        Learn more »
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="border rounded shadow box" data-aos="zoom-out-up" data-aos-duration="650" data-aos-delay="200">
                    <i class="fa fa-heart-o icon"></i>
                    <h3 class="name">
                        Penghafal Al-Quran
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.
                    </p>
                    <a href="/penggalangan" class="learn-more">
                        Learn more »
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="border rounded shadow box" data-aos="zoom-out-up" data-aos-duration="250" data-aos-delay="250">
                    <i class="fa fa-leaf icon"></i>
                    <h3 class="name">
                        Panti Asuhan
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.
                    </p>
                    <a href="#" class="learn-more">
                        Learn more »
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="border rounded shadow box" data-aos="zoom-out-up" data-aos-duration="450" data-aos-delay="250">
                    <i class="fa fa-heartbeat icon"></i>
                    <h3 class="name">
                        Dana Sosial Kesehatan
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.
                    </p>
                    <a href="#" class="learn-more">
                        Learn more »
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="border rounded shadow box" data-aos="zoom-out-up" data-aos-duration="650" data-aos-delay="250">
                    <i class="fa fa-phone icon"></i>
                    <h3 class="name">
                        Lain-Lain
                    </h3>
                    <p class="description">
                        Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.
                    </p>
                    <a href="#" class="learn-more">
                        Learn more »
                    </a>
                </div>
            </div>
        </div>
        <!-- End: Features -->
    </div>
</div>
<div data-bs-parallax-bg="true" class="newsletter-subscribe" style="background-image: url(assets/img/product-aeon-feature.jpg);background-position: center;background-size: cover;color: rgb(255,255,255); border-radius: none;">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-center">AYO DUKUNG KAMI</h2>
            <p class="text-center" style="color: rgb(255,255,255);">Kirim email anda untuk mendapatkan info terbaru dari kami</p>
        </div>
        <!-- End: Intro -->
        <form class="form-inline" method="post">
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Subscribe </button></div>
        </form>
    </div>
</div>
<!-- End: Newsletter Subscription Form -->

@endsection
