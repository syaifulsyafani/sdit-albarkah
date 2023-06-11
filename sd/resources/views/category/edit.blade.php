@extends('panel')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kategori</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @include('msg.msg')

    <a href='{{ url('category') }}' class="btn btn-secondary">
        < Kembali </a> <!-- START FORM -->
            <form enctype="multipart/form-data" action='{{ url('category/' .$data->category_id) }}' method='post'>
                @csrf
                @method('PUT')
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            {{ $data->category_id }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='nama_cat' value="{{ $data->nama_cat}}"
                                id="nama_cat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="judul" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="samakan dengan nama"  class="form-control" name='slug_cat' value="{{ $data->slug_cat}}"
                                id="slug_cat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="isi" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary"
                                name="submit">SIMPAN</button></div>
                    </div>
            </form>
</div>
<!-- AKHIR FORM -->

@endsection