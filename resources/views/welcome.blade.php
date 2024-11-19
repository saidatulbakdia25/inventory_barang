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
                   
                                    @if (Route::has('login'))
                                        <div class="p-3 border bg-light">
                                            @auth
                                                <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn-primary active" aria-current="page">Log in</a>
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="btn btn-primary active" aria-current="page">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                       
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
 <div class="page-body">
        <div class="container-xl">

            <div class="row">
                <div class="col-12 col-lg-4">
                    <form action="" method="get">
                        <div class="input-icon mb-3">
                            <input type="search" value="{{ request()->query('keyword') }}" class="form-control w-100"
                                name="keyword" placeholder="Search…">

                        </div>
                    </form>

                </div>
            </div>
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- Total : {{ $barangKeluarDetails->count() }} --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th class="w-1">No</th>
                                        <th>Barang</th>
                                        <th class="text-center">Stok</th>
                                        <th class="text-center">Masuk</th>
                                        <th class="text-center">Keluar</th>


                                        {{-- <th class="w-1"></th> --}}
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($barangs as $barang)
                                        <tr>
                                            <td class="align-text-top text-start text-lg-center" data-label="id">
                                            {{ $barang->id }}
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

    </div>