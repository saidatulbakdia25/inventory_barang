@extends('adminlte.layouts.app')
 @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route  ('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Daftar Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
         <div class="container mt-5">
         <div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($barangs as $barang)
<tr>
    <td> {{ $loop->index + 1 }}</td>
    <td> {{ $barang->nama_barang }}</td>
    <td> {{ $barang->stok }}</td>
    <td> {{ $barang->keterangan }} </td>
    <td>
        <a href="#" class="btn btn-warning btn-sm" role="button">Edit</a>
        <a href="#" class="btn btn-danger btn-sm" role="button">Hapus</a>
    </td>
</tr>
@endforeach
            </tbody>
        </table>
    </div>
</div>
         </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     
@endsection