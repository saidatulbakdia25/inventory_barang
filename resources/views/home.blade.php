@extends('adminlte.layouts.app')

@section('content')
<div class="content-wrapper">
<div class="content-header">
<div class="page-header d-print-none">
<div class="container-xl">
<div class="row g-2 align-items-center">
      <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
                Home
             </div>
            <h2 class="page-title">
           Dashboard
          </h2>
      </div>
      </div>
</div>
</div>

        <div class="container-xl">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-4">
                <div class="card card-sm h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            
                            <div class="col-auto">
                            <span class="bg-primary text-white avatar" style="padding: 1rem;"> <!-- Menambahkan padding pada avatar -->
                                <i class="fas fa-file-archive" style="font-size: 2rem; margin-middle: 2rem;"></i> <!-- Ukuran ikon -->
                            </span>
                            </div>
                            
                            <div class="col">
                                <div class="text-secondary" style="font-style: italic;font-size: 1.5rem; ">Barang</div>
                                <div style="font-weight: bold; font-size: 2rem;">{{ $totalBarang }}</div> <!-- Menggunakan CSS inline -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-4 ">
                <div class="card card-sm h-100">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col-auto">
                                <span class="bg-primary text-white avatar" style="padding: 1rem;"> <!-- Menambahkan padding pada avatar -->
                                    <i class="fas fa-exchange-alt icon" style="font-size: 2rem; margin-middle: 2rem;"></i> <!-- Ukuran ikon -->
                                </span>
                            </div>

                            <div class="col">
                                <div class="text-secondary" style="font-style: italic;font-size: 1.5rem; ">Barang Masuk</div>
                                <div style="font-weight: bold; font-size: 2rem;">{{ $totalBarangMasuk }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card card-sm h-100">
                    <div class="card-body">
                        <div class="row align-items-center">

                            <div class="col-auto">
                                <span class="bg-primary text-white avatar" style="padding: 1rem;"> <!-- Menambahkan padding pada avatar -->
                                    <i class="fas fa-envelope" style="font-size: 2rem; margin-middle: 2rem;"></i> <!-- Ukuran ikon -->
                                </span>
                            </div>

                            <div class="col">
                                <div class="text-secondary" style="font-style: italic;font-size: 1.5rem; ">Barang Keluar</div>
                                <div style="font-weight: bold; font-size: 2rem;">{{ $totalBarangKeluar }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection