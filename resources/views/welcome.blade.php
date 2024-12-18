@extends('adminlte.layouts.auth')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md d-print-none">
        <div class="table-responsive">
        <div class="container-xl">
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-1 centered-content">
                <div class="image">
                    <img src="{{ asset('assets/dist/img/image.WEBP') }}" style="width: 150px; height: 150px;" class="img-circle elevation-2" alt="User  Image">
                </div>
                <div style="margin-top: 20px;"> <!-- Atur jarak sesuai kebutuhan -->
                    <a href=".">
                        PT.SINERGI GULA NUSANTARA
                    </a>
                </div>
            </h1>
        </div>
                       
    </div>
</div>
        </header>

 <!-- Page body -->
 <div class="content">
 <div class="table-responsive">
        <div class="container">
            <div class="card">
                <div class="card-body">
                <div class="btn-group">
                        <div class="container mt-2">
                        <div class="d-flex justify-content-end">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-primary mx-2">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary active mx-2" aria-current="page">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-primary active mx-2" aria-current="page">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                        </div>   
                        </div>
                    <table class="table table-hover table-bordered" style="margin-top: 10px">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Barang</th>
                                <th class="text-center">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <td class="align-text-top text-start text-lg-center" data-label="No">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td class="align-text-top text-start text-lg-center" data-label="nama_barang">
                                        {{ $barang->nama_barang }}
                                    </td>
                                    <td class="align-text-top text-start text-lg-center" data-label="Stok">
                                        {{ $barang->stok }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>