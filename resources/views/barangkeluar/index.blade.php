@extends('adminlte.layouts.app')
 @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 100rem;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Barang Keluar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route  ('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Barang Keluar</li>
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
         <div class="col-sm-13">
                    <button type="button" class="btn btn-primary btn-sm float-right" style="padding: 0.50rem 2rem; margin-bottom: 10px; margin-right: 10px; margin-top: 10px;" autocomplete="off" data-bs-toggle="modal" data-bs-target="#modal-create">
                        <i class="fas fa-plus fa-xs me-2"></i> Tambah Barang Keluar Baru
                    </button>
                </div>
        
        <div class="modal fade" id="modal-create">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Barang - Keluar</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('barangkeluar.store') }}" id="quickForm" method="POST" enctype="multipart/form-data">
                        @csrf
        
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="barang_id" class="form-label">Nama Barang</label>
                                <select name="barang_id" id="barang_id" class="form-control" required>
                                    <option value="">Pilih Barang</option>
                                    @foreach($barangs as $barang)
                                        <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" name="stok" class="form-control" placeholder="Jumlah Barang Keluar" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input type="date" name="tgl_keluar" class="form-control" placeholder="Tanggal Keluar Barang" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control" placeholder="Keterangan" required></textarea>
                            </div>
                        </div>
        
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Keluar</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangkeluars as $barangkeluar)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $barangkeluar->barang->nama_barang }}</td> 
                    <td>{{ $barangkeluar->stok }}</td>
                    <td>{{ $barangkeluar->tgl_keluar }}</td>
                    <td>{{ $barangkeluar->keterangan }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modaldelete-barangkeluar-{{ $barangkeluar->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
            
                        <div class="modal fade" id="modaldelete-barangkeluar-{{ $barangkeluar->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="delete-barangkeluar-{{ $barangkeluar->id }}">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus barang keluar "{{ $barangkeluar->barang->nama_barang }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ route('barangkeluar.destroy', $barangkeluar->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     
@endsection

<!-- Menyertakan Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Menyertakan Popper.js dan Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
