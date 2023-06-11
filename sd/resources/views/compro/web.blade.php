@extends('compro.main')

@section('container')

	<!-- start banner Area -->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset('compro/img/header-bg1.jpg')}}">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen">
				<div class="banner-content col-lg-12">
                    <img src="{{ asset ('/img/albarkahtrans.png') }}" alt="">
					<h1>
						Berkepribadian<br>
                        &<br>
						Berprestasi
					</h1>
					<a href="/profil" class="primary-btn">Read More</a>
				</div>
			</div>
		</div>
		<div class="head-bottom-meta">
			<div class="d-flex meta-left no-padding">
				<a href="#"><span class="fa fa-facebook-f"></span></a>
				<a href="#"><span class="fa fa-twitter"></span></a>
				<a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

    <!-- Start Sample Area -->
	<section class="sample-text-area">
        <div class="container">
		<div class="section-top-border">
            <h3 class="mb-30">Quotes</h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        “Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money
                        to them through any US bank or payment system. As a result of this law, most of the popular online casino networks
                        such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being
                        chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new
                        online casinos started taking root. These began to operate under a different business umbrella, and by doing that,
                        rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems
                        that would accept this new clarification and start doing business with me. Listed in this article are the electronic
                        banking”
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
	</section>
	<!-- End Sample Area -->
<!-- Start Kata Sambutan -->        
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
<!-- End Kata Sambutanxa -->

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
                <div class="section-title text-left">
                    <h4>About Us</h4>
                    <h2>We are world <br /> number one Company</h2>
                </div>
                <div>
                    <p>
                        Face male he light it moveth darkness winged eveni seas after life every gathering is forth two kind lesser i
                        from seas him open him From creepeth after, life is above image from replenish behold great
                    </p>
                </div>
                <a href="#" class="primary-btn">Read More</a>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start callto Area -->
<section class="callto-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="call-wrap mx-auto">
                <h1></h1>
                <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=TB_1fLv4bjY">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End callto Area -->
    
@endsection