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
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <div class="card card-sm h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar">
                                    <i class="ti ti-stack-2 icon"></i>
                                </span>
                            </div>
                            
                            <div class="col">
                                <div class="text-secondary">Total Barang</div>
                                <div class="font-weight-medium">{{ $totalBarang }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card card-sm h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-green text-white avatar">
                                    <i class="ti ti-transfer-in icon"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="text-secondary">Total Barang Masuk</div>
                                <div class="font-weight-medium">{{ $totalBarangMasuk }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card card-sm h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-twitter text-white avatar">
                                    <i class="ti ti-transfer-out icon"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="text-secondary">Total Barang Keluar</div>
                                <div class="font-weight-medium">{{ $totalBarangKeluar }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection