@extends('adminlte.layouts.auth')

@section('content')

    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        {{-- <img src="./static/logo.svg" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image"> --}}
                        DATA BARANG
                    </a>
                </h1>
                        <div class="btn-group">
                        <div class="container mt-5">
                        <div class="d-flex justify-content-center"> <!-- Menggunakan Flexbox untuk mengatur posisi -->
                                    @if (Route::has('login'))
                                        
                                            @auth
                                                <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn-primary active" aria-current="page" >Log in</a>
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="btn btn-primary active" aria-current="page">Register</a>
                                                @endif
                                            @endauth
                                        
                                    @endif
                                    
                        </div>
                        </div>
                       
             </div>
                                    
                  
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav">

                        </ul>
                    </div>
                </div>
            </div>
        </header>

 <!-- Page body -->
 <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
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
