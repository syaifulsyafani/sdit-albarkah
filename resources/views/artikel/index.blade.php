@extends('panel')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Artikel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Artikel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        @include('msg.msg')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
                <a href='{{ url('artikel/create')}}' class="btn btn-primary">+ Tambah Data</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-2">Kategori</th>
                        <th class="col-md-2">Judul</th>
                        <th class="col-md-1">Foto</th>
                        <th class="col-md-3">Isi</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $data_artikel->firstItem() ?>
                    @foreach ($data_artikel as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->category->nama_cat }}</td>
                        <td>{{ $item->judul_artikel }}</td>
                        <td>
                            @if ($item->foto_artikel)
                            <img style="max-width:50px;max-height:50px"
                                src="{{ url('foto').'/'. $item->foto_artikel }}" />
                            @endif
                        </td>

                        <td> <span style="
                        display:inline-block;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        max-width: 13ch;">
                        {{ $item->isi_artikel}}</span>
                        <td>
                            <a href='{{ url('artikel/'. $item->id.'/edit') }}'
                                class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Apakah akan menghapus data ?')" class="d-inline"
                                action="{{ url('artikel/'.$item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach

                </tbody>
            </table>
            {{ $data_artikel->withQueryString()->links() }}
        </div>
        <!-- AKHIR DATA -->
    </div>
    @endsection