@extends('panel')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">kegiatan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">kegiatan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    

    <a href='{{ url('kegiatan') }}' class="btn btn-secondary"> < Kembali </a>
     <!-- START FORM -->
     <form enctype="multipart/form-data" action='{{ url('kegiatan/' .$data->id_kegiatan) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    {{ $data->id_kegiatan }}    
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul_kegiatan' value="{{ $data->judul_kegiatan}}" id="judul_kegiatan">
                </div>
            </div>
            @if ($data->foto_kegiatan)
                <div class="mb-3">
                    <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto_kegiatan }}"/>
                </div>
                
            @endif
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="foto_kegiatan" id="foto_kegiatan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='isi_kegiatan' value="{{ $data->isi_kegiatan }}" id="isi_kegiatan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->

@endsection
