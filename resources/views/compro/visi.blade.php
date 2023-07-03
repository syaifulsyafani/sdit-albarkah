@extends('compro.main')

@section('container')

<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Visi & Misi</h1>
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
                    <h4>Visi Kami</h4> <br>
                    <h3>Menjadikan Lembaga Pendidikan <br> Alternatif Yang Mendidik Generasi Qur'ani</h3> <br>
                    <h3>Bertradisikan Islami</h3> <br>
                    <h3>Berkualitas Tinggi dan <br> Menjadi Model di Kota Depok</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End About Area -->

<!-- Start About Area -->
<section class="about-area section-gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-12 about-right">
                <div class="section-title text-left">
                    <h4>Misi Kami</h4> <br>
                    <h3>Mengupayakan siswa berkaidah kuat, berakhlak mulia, 
                        berprestasi akademik dan berjiwa mandiri</h3> <br>
                    <h3>Menyelenggarakan pendidikan yang berkualitas 
                        dan memiliki karakter islami</h3> <br>
                    <h3>Memfasilitasi seluruh kecerdasan dan potensi 
                        peserta didik melalui pendidikan dan pengajaran</h3>

                </div>
            </div>
            <div class="col-lg-7 col-md-12 about-left">
                <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
    
@endsection