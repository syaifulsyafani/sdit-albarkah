@extends('panel')

@section('content')


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Galeri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Galeri</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- START DATA -->
     <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="{{ url('galeri') }}" method="get">
              <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
          <a href='{{ url('galeri/create')}}' class="btn btn-primary">+ Tambah Data</a>
        </div>
  
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-2">Foto</th>
                    <th class="col-md-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data_galeri->firstItem() ?>
                @foreach ($data_galeri as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->id_galeri }}</td>
                    <td>
                        @if ($item->foto_galeri)
                            <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'. $item->foto_galeri }}"/>
                        @endif
                    </td>
                    <td>
                        <a href='{{ url('galeri/'. $item->id_galeri.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Apakah akan menghapus data ?')"
                         class="d-inline" action="{{ url('galeri/'.$item->id_galeri) }}"
                            method="post">
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
       {{ $data_galeri->withQueryString()->links() }}
  </div>
  <!-- AKHIR DATA -->

@endsection
