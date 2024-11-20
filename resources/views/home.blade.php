@extends('adminlte.layouts.app')

@section('content')
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards mb-4">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar">
                                    <i class="ti ti-stack-2 icon"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">{{ $totalBarang }}</div>
                                <div class="text-secondary">Total Barang</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-green text-white avatar">
                                    <i class="ti ti-transfer-in icon"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">{{ $totalBarangMasuk }}</div>
                                <div class="text-secondary">Total Barang Masuk</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-twitter text-white avatar">
                                    <i class="ti ti-transfer-out icon"></i>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">{{ $totalBarangKeluar }}</div>
                                <div class="text-secondary">Total Barang Keluar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection