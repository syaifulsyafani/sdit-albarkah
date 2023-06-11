@extends('panel')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Guru & Staff</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Guru & Staff</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    

    <a href='{{ url('staff') }}' class="btn btn-secondary"> < Kembali </a>
     <!-- START FORM -->
     <form enctype="multipart/form-data" action='{{ url('staff/' .$data->NIK) }}' method='post'>
    @csrf
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            @if ($data->foto_staff)
            <div class="mb-3">
                <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto_staff }}"/>
            </div>
            
        @endif
            <div class="mb-3 row">
            <label for="isi" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="foto_staff" id="foto_staff">
                </div>
             </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                    {{ $data->NIK }}    
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    {{ $data->NIP }}    
                </div>
            </div>
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='Nama' value="{{ $data->Nama}}" id="Nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="isi" class="col-sm-2 col-form-label">Profesi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='Profesi' value="{{ $data->Profesi }}" id="Profesi">
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
