@extends('compro.main')

@section('container')


<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white"> Fasilitas Sekolah</h1>
                <p>Home/Facility</p>
            </div>
        </div>
    </div>
</section>
<!-- End top-section Area -->

<!-- Start features Area -->
<section class="features-area section-gap-top" id="news">
    <div class="container">
        <div class="row feature_inner">
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <i class="fi flaticon-compass"></i>
                    <h4>Creative Design</h4>
                    <p>Hac facilisi ac vitae consec tetu commodo vel magna suspendisse on senectus pharetra magnfauc </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <i class="fi flaticon-desk"></i>
                    <h4>Experienced Style</h4>
                    <p>Hac facilisi ac vitae consec tetu commodo vel magna suspendisse on senectus pharetra magnfauc </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <i class="fi flaticon-bathroom"></i>
                    <h4>Product Research</h4>
                    <p>Hac facilisi ac vitae consec tetu commodo vel magna suspendisse on senectus pharetra magnfauc </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <i class="fi flaticon-beach"></i>
                    <h4>Affordable Price</h4>
                    <p>Hac facilisi ac vitae consec tetu commodo vel magna suspendisse on senectus pharetra magnfauc </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features Area -->


<!-- Start About Area -->
<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-12 about-right">
                <div class="section-title text-right">
                    <h2>Masjid</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-12 about-right">
                <div class="section-title text-left">
                    <h2>Lapangan</h2>

                </div>
            </div>
            <div class="col-lg-7 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-12 about-right">
                <div class="section-title text-right">
                    <h2>Ruang Laboratorium</h2> <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

    
@endsection