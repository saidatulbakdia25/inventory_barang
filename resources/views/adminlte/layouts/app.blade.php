<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? "Inventory Devisi Pengolahan" }} </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Theme icon -->
  <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/css/ionicons.min.css">
  @yield('addCss')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
        
          
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/image.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
              <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          @else
              <a href="#" class="d-block">Guest</a> <!-- Tampilkan 'Guest' jika tidak ada pengguna yang terautentikasi -->
          @endauth
        </div>
      </div>
</div>


      <!-- Sidebar Menu -->
      
                    <li class="nav-item">
                  <ion-icon name="server-outline"></ion-icon>
                  <span class="ms-3 text-secondary mt-3 mb-1">Master Data</span>
              </li>
              <a href="{{ route('barang.index') }}" class="nav-link">
                  <ion-icon name="logo-buffer" class="icon"></ion-icon> <!-- Ikon baru ditambahkan di sini -->
                  <i class="ti ti-box-padding icon"></i>
                  <span class="nav-link-title">Barang</span>
              </a>
                                    
              

            <li class="nav-item">
            <span class="ms-3 text-secondary mt-3 mb-1">Aktifitas</span>
            </li>
            <a href="{{route('barangmasuk.index')}}" class="nav-link">
                  <i class="ti ti-box-padding icon"></i>
                  <span class="nav-link-title">Barang Masuk</span>
            </a>
            
            <a href="{{route('barangkeluar.index')}}" class="nav-link">
              <i class="ti ti-box-padding icon"></i>
              <span class="nav-link-title">Barang Keluar</span>
           </a>

            <li class="nav-item">
              <span class="ms-3 text-secondary mt-3 mb-1">Laporan</span>
          </li>
          <a href="{{route('barangstok.index')}}" class="nav-link">
            <i class="ti ti-box-padding icon"></i>
            <span class="nav-link-title">Barang Stok</span>
         </a>

           
   
    <!-- /.sidebar -->
  </aside>

  @yield('content')

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
@yield('addJavascript')
</body>
</html>
