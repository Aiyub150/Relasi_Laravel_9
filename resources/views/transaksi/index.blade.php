@extends('layout.master')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Transaksi</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <a href="/transaksi/tambah" class="btn btn-primary">TAMBAH</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID TRANSAKSI</th>
          <th>ID ADMIN</th>
          <th>TRANSAKSI TANGGAL</th>
          <th>TRANSAKSI NOTA</th>
          <th>TRANSAKSI STATUS</th>
          <th colspan="2" style="text-align: center;">AKSI</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transaksi as $a)
        <tr>
          <td>{{ $a->id_transaksi }}</td>
          <td>{{ $a->id_admin }}</td>
          <td>{{ $a->transaksi_tanggal }}</td>
          <td>{{ $a->transaksi_nonota }}</td>
          <td>{{ $a->transaksi_status }}</td>
          <td><a href="/transaksi/ubah{{ $a->id }}" class="btn btn-warning">EDIT</a></td>
          <td><a href="/transaksi/delete{{ $a->id_transaksi }}" class="btn btn-danger">DELETE</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection
