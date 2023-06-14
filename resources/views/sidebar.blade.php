<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="text-decoration:none" href="/home" class="brand-link">
        <img src="{{ asset('compro/img/logo1.png') }}" alt="">
    </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/home" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-header">KATEGORI</li>
            <li class="nav-item">
                <a href="/category" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Kategori Artikel
                    </p>
                </a>
            </li>
            <li class="nav-header">ARTIKEL</li>
            <li class="nav-item">
                <a href="/artikel" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Artikel
                    </p>
                </a>
            </li>


    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
</div>

</body>