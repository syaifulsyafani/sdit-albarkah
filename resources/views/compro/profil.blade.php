@extends('compro.main')

@section('container')


	<!-- Start top-section Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center text-center banner-content">
				<div class="col-lg-12">
					<h1 class="text-white">Profil Sekolah</h1>
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
                <img class="img-fluid" src="{{ asset('compro/img/profil.jpg') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-12 about-right">
                <div class="section-title text-left">
                    <h4>Tentang Kami</h4>
                    <h2>Kami adalah  <br /> Sekolah Islam Terpadu</h2>
                </div>
                <div>
                    <p>
                        SDIT Al-Barkah adalah sebuah sekolah dasar yang berlokasi di daerah Jl. Raya Bogor No.29,5 Mekarsari, Cimanggis, Depok. Didirikan pada tahun 1998, sekolah ini berkomitmen untuk memberikan pendidikan berkualitas tinggi dengan pendekatan Islami kepada siswa-siswinya. 
                    </p>
                    <p>
                        SDIT Al-Barkah memadukan kurikulum nasional dengan pendidikan agama Islam yang kuat, menciptakan lingkungan yang inklusif dan mendukung perkembangan holistik siswa.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
    
@endsection