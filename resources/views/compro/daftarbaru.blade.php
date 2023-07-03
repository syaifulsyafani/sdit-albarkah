@extends('compro.main')

@section('container')

<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Pendaftaran Siswa</h1>
            </div>
        </div>
    </div>
</section>
<!-- End top-section Area -->

<!-- Start About Area -->
<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content">
            <div class="col-lg-10 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('compro/img/banner2.jpeg') }}" alt="">
            </div>
        </div><br><br>
        <h2>Daftar Sekarang:</h2>
        <a href="bit.ly/PPDBSDITALBARKAH">bit.ly/PPDBSDITALBARKAH</a>
    </div>
</section>

@endsection