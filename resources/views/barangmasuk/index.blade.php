@extends('adminlte.layouts.app')
 @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Barang Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route  ('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Barang Masuk</li>
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
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Meja</td>
                    <td>50</td>
                    <td>12 10 2024</td>
                    <td>
                        
                        <a href="#" class="btn btn-sm btn-danger btn-delete" >Hapus</a>
                    </td>
                </tr>
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