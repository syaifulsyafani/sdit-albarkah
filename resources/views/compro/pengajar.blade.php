@extends('compro.main')

@section('container')

<!-- Start top-section Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Pengajar di Sekolah</h1>
                <p>Home/Teach</p>
            </div>
        </div>
    </div>
</section> <br> <br>
<!-- End top-section Area -->

<!-- Pengajar Start -->
<div class="container-fluid pt-2">
    <div class="container">
        <div class="row">
            @foreach ($data_staff as $item)
              <div class="col-md-6 col-lg-3 text-center team mb-5">
                  <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                      <img class="img-fluid w-100" src="{{ url('foto').'/'. $item->foto_staff }}" />
                      <div
                          class="team-social d-flex align-items-center justify-content-center w-40 h-40 position-absolute">
                      </div>
                  </div>
                  <h4>{{ $item->Nama }}</h4>
                  <i>{{ $item->Profesi }}</i>
              </div>
            @endforeach
        </div>
    </div>
</div> <br> <br>
<!-- Guru End -->

@endsection