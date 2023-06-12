@extends('compro.main')

@section('container')


<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white"> Fasilitas Sekolah</h1>
            </div>
        </div>
    </div>
</section>
<!-- End top-section Area -->

<!-- Start About Area -->
<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-12 about-right">
                <div class="section-title text-right">
                    <h2>Ruang Kelas</h2>
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
                    <h2>Lab Komputer</h2>

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
                    <h2>Perpustakaan</h2> <br>
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
                    <h2>Ruang Podcast</h2>

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
                    <h2>Kantin Sekolah</h2> <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

    
@endsection