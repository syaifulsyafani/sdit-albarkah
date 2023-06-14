@extends('compro.main')

@section('container')

<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Artikel</h1>
            </div>
        </div>
    </div>
</section> <br> <br>
<!-- End top-section Area -->

<!-- Start post-content Area -->
<section class="post-content-area single-post-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12 center">
                        <div class="feature-img center mb-5">
                            <img class="img-fluid" src="{{ url('foto').'/'. $artikel->foto_artikel }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">{{ $artikel->category->nama_cat}}</a></li>
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Admin</a> <span
                                    class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                    class="lnr lnr-calendar-full"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <h1 class="mt-20 mb-20">{{ $artikel->judul_artikel}}</h1>
                        <p>
                            {{ $artikel->isi_artikel}}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End post-content Area -->

@endsection