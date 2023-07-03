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
<section>
    <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="row">
            @foreach ($data_artikel as $item)
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
                        <div class="user-details">
                            <ul>
                                <li class="user-name col-lg-12 col-md-12 col-10"><a href="#">Admin</a> <span
                                        class="lnr lnr-user"></span></li>
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
<div class="container col-lg-4 col-md-4 col-sm-4">
    <aside class="right_content">
        <div class="single_sidebar">
            <h2>Popular Post</h2>
            <ul class="spost_nav">
                <li>
                    <div class="media wow fadeInDown animated"
                        style="visibility: visible; animation-name: fadeInDown;"> <a
                            href="pages/single_page.php" class="media-left"> <img alt="website template image"
                                src="images/post_img1.jpg"> </a>
                        <div class="media-body"> <a href="pages/single_page.php" class="catg_title"> Aliquam
                                malesuada diam eget turpis varius 1</a> </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown animated"
                        style="visibility: visible; animation-name: fadeInDown;"> <a
                            href="pages/single_page.php" class="media-left"> <img alt="website template image"
                                src="images/post_img2.jpg"> </a>
                        <div class="media-body"> <a href="pages/single_page.php" class="catg_title"> Aliquam
                                malesuada diam eget turpis varius 2</a> </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown animated"
                        style="visibility: visible; animation-name: fadeInDown;"> <a
                            href="pages/single_page.php" class="media-left"> <img alt="website template image"
                                src="images/post_img1.jpg"> </a>
                        <div class="media-body"> <a href="pages/single_page.php" class="catg_title"> Aliquam
                                malesuada diam eget turpis varius 3</a> </div>
                    </div>
                </li>
                <li>
                    <div class="media wow fadeInDown animated"
                        style="visibility: visible; animation-name: fadeInDown;"> <a
                            href="pages/single_page.php" class="media-left"> <img alt="website template image"
                                src="images/post_img2.jpg"> </a>
                        <div class="media-body"> <a href="pages/single_page.php" class="catg_title"> Aliquam
                                malesuada diam eget turpis varius 4</a> </div>
                    </div>
                </li>
            </ul>
        </div>
</div>
    </div>
    
</div>

@endsection