@extends('compro.main')

@section('container')

<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Galeri Sekolah</h1>
                <p>Home/Gallery</p>
            </div>
        </div>
    </div>
</section>
<!-- End top-section Area -->

<section class="section-gap">
    <div class="container">
        <div class="row gallery-item">
            @foreach ($data_galeri as $item)
            <div class="col-md-6">
                <div class="single-project">
                    <img class="image img-fluid" src="{{ url('foto').'/'. $item->foto_galeri }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection