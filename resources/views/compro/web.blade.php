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
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

    <!-- Start Kata Sambutan -->        
    <section class="about-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-12 about-right">
                    <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
                </div>
                <div class="col-lg-7 col-md-12 about-left">
                    <div class="section-title text-left">
                        <h2>Sambutan Kepala SDIT Al Barkah</h2>
                        <p>Bissmillahirrahmanirrahiim <br><br>
                            Welcome to SDIT Al Barkah…<br><br>
                            Selamat datang di dunia pendidikan Al Barkah. Kami merasa sangat bangga mendapatkan perhatian dan kepercayaan dari Bapak-Ibu sekalian. Kami akan berupaya untuk dapat menjalankan amanah ini dengan baik agar pertanggung jawaban di hadapan Allah SWT kelak menjadi ringan.
                            <br><br>Di sini kami mengajak Anda para orang tua siswa untuk berpartisipasi membangun masyarakat pembelajar dalam rangka menyongsong era baru bagi anak-anak kita dan menjadikan anak-anak kita generasi yang mampu berkompetisi tanpa kehilangan wajah budaya dan moral.
                            Memasuki pergaulan global yang penuh dengan kompetisi ini, kita perlu menyiapkan mental anak-anak kita agar mampu bersaing dengan baik dengan memiliki moral/adab islami, kemandirian, kecerdasan, juga tentunya kreatifitas-inovasi sesuai tumbuh kembangnya.
                            <br><br>Di SDIT Al Barkah setiap siswa memiliki hak untuk berprestasi dan mendapatkan pelayanan yang baik. Karena kami memandang ini semua adalah amanah yang akan kami pertanggung jawabkan di hadapan Allah SWT. Tentu hal ini semakin terasa mudah dengan adanya kerjasama dari para orang tua siswa dalam menjalankan program sekolah.
                            <br><br>Sebagai penutup, sekali lagi kami ucapkan selamat datang di Al Barkah. Marilah bekerjasama agar anak-anak kita dapat berkembang dengan baik sehingga tumbuh menjadi generasi yang berakhlakul karimah dan cerdas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Kata Sambutan -->

<!-- Start Kata Sambutan -->        
    <section class="about-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-12 about-right">
                    <div class="section-title text-left">
                        <h2>Kami Adalah Sekolah</h2>
                        <h2>Islam Terpadu</h2>
                        <p>SDIT Al-Barkah adalah sebuah sekolah dasar yang berlokasi di daerah Jl. Raya Bogor No.29,5 Mekarsari, Cimanggis, Depok. Didirikan pada tahun 1998, sekolah ini berkomitmen untuk memberikan pendidikan ...</p>
                        <a href="/profil" class="primary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 about-left">
                    <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
<!-- End Kata Sambutan -->


{{-- bagian video --}}
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
<br><br><br>
    
@endsection