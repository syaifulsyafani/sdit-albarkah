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
</section>
<!-- End top-section Area -->

<!-- Start post-content Area -->
<section class="section-gap">
    <div class="post-content-area">
        <div class="row">
            @foreach ($data_artikel as $item)
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
                        <div class="user-details">
                            <ul>
                                <li>Admin</li>
                                <li>{{ $item->category->nama_cat }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ url('foto').'/'. $item->foto_artikel }}" alt="">
                        </div><br>
                        <a class="posts-title" href="blog-single.html">
                            <h3>{{$item->judul_artikel}}</h3>
                        </a><br>
                        <p class="excert">
                            <span style="
                            display:inline-block;
                            white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            max-width: 60ch;"> {{$item->isi_artikel}}
                        </p>
                        <a href="{{ route('detail-blog', $item->id)}}" class="primary-btn">View More</a><br><br><br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

@endsection