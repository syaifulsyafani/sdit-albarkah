 @extends('panel')

 @section('content')


 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Dashboard</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item active">Dashboard</li>
                     </ol>
                 </div> <br><br><br>
                 <section class="content">
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-lg-3 col-6">
                                 <div class="small-box bg-info">
                                     <div class="inner">
                                         <h3>3</h3>
                                         <p>Kategori Artikel</p>
                                     </div>
                                     <div class="icon">
                                         <i class="ion ion-bag"></i>
                                     </div>
                                     <a href="#" class="small-box-footer">More info <i
                                             class="fas fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
 </div>
 <!-- /.content-header --

 @endsection