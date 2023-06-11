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
                <img class="img-fluid" src="{{ asset('compro/img/about.png') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-12 about-right">
                <div class="section-title text-left">
                    <h4>Tentang Kami</h4>
                    <h2>Kami adalah  <br /> Sekolah Islam Terpadu</h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse,
                        repellendus eos a iste reprehenderit perferendis,
                        deserunt facere architecto dolorum, adipisci deleniti nam labore dolore non totam. 
                        Officia vero veniam placeat?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolore odit blanditiis voluptas nihil laudantium accusantium rerum libero quam officiis,
                        recusandae doloribus, atque iste laboriosam. Culpa repellat dolor vero ab laborum?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
    
@endsection