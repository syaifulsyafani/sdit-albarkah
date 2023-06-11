@extends('compro.main')

@section('container')

<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Kontak</h1>
            </div>
        </div>
    </div>
</section>
<!-- End top-section Area -->

<!--================Contact Area =================-->
<section class="contact_area section-gap">
    <div class="container d-flex justify-content-center">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2674131467866!2d106.85710761449461!3d-6.359424163982223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec60a98a38c5%3A0xf6b8f9a4090f01ff!2sElementary%20School%20Islam%20Al%20Barkah!5e0!3m2!1sen!2sid!4v1671544372701!5m2!1sen!2sid"
            width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!--================Contact Area =================-->

<div class="container">
<div class="row">
    <div class="col-lg-3">
        <div class="contact_info">
            <div class="info_item">
                <i class="fa fa-home"></i>
                <h6>Alamat</h6>
                <p>Jl. Raya Bogor No.29,5 Mekarsari, Cimanggis, Depok</p>
            </div>
            <div class="info_item">
                <i class="fa fa-phone"></i>
                <h6><a href="#">Phone</a></h6>
                <p>+62 21 8770 6162</p>
            </div>
            <div class="info_item">
                <i class="fa fa-envelope"></i>
                <h6><a href="#">E-mail</a></h6>
                <p>albarkah.sdit@gmail.com</p>
            </div>
        </div>
    </div>
</div>
</div><br>

@endsection