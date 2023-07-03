<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('compro/img/fav.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>SDIT Al-Barkah</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:400,500" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{ asset('compro/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('compro/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('compro/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('compro/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('compro/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('compro/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('compro/css/main.css') }}">
</head>

<body>

    <!-- Start Header Area -->
    <header class="default-header bg-light">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/web">
                    <img src="{{ asset('compro/img/logo1.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="/web">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Tentang
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/profil">Profil Sekolah</a>
                                <a class="dropdown-item" href="/visi">Visi & Misi</a>
                                <a class="dropdown-item" href="/struktur">Struktur Organisasi</a>
                            </div>
                        </li>
                        <li><a href="/fasilitas">Fasilitas</a></li>
                        <li><a href="/kurikulum">Kurikulum</a></li>
                        <li><a href="/bloger">Artikel</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Pendaftaran
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/visi">Alur Pendaftaran</a>
                                <a class="dropdown-item" href="/visi">Pendaftaran Siswa Baru</a>
                                <a class="dropdown-item" href="/profil">FAQ</a>
                            </div>
                        </li>
                        <li><a href="/kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Area -->

    @yield('container')

    <!-- start footer Area -->
    <footer class="footer-area section-gap-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 mb-5">
                    <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
                        style="font-size: 30px; line-height: 30px">
                        <span class="text-white">SDIT Al Barkah</span>
                    </a>
                    <p class="text-white">
                        Sekolah Islam yang berkomitmen untuk memberikan pendidikan yang berkualitas dan bernilai-nilai
                        Islam kepada para siswa. Dengan didukung oleh tenaga pendidik yang berpengalaman dan
                        berdedikasi, SDIT Al Barkah menciptakan lingkungan belajar yang inklusif, kreatif, dan
                        interaktif, sehingga siswa dapat tumbuh dan berkembang secara optimal dalam aspek akademik,
                        moral, dan spiritual.
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/profil">Profil Sekolah</a></li>
                        <li><a href="/visi">Visi & Misi</a></li>
                        <li><a href="/struktur">Struktur Organisasi</a></li>
                        <li><a href="/fasilitas">Fasilitas</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>-</h4>
                    <ul>
                        <li><a href="/pengajar">Kurikulum</a></li>
                        <li><a href="/bloger">Artikel</a></li>
                        <li><a href="/galeriweb">Pendaftaran</a></li>
                        <li><a href="/kontak">Kontak</a></li>
                    </ul>
                </div>
                <div class="single-footer-widget ">
                    <h4>Kontak</h4>
                    <h6 class="text-white">Phone</h6>
                    <p class="text-white">+62 21 8770 6162</p>
                    <h6 class="text-white">E-mail</h6>
                    <p class="text-white">albarkah.sdit@gmail.com</p>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                    Copyright Al-Barkah &copy;<script>
                        document.write(2023);
                    </script> All rights reserved
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{ asset('compro/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('compro/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('compro/js/jsjquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('compro/js/parallax.min.js') }}"></script>
    <script src="{{ asset('compro/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('compro/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('compro/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('compro/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('compro/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('compro/js/main.js') }}"></script>
</body>

</html>