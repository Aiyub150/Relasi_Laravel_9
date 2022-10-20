@extends('layout.master')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Barang</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <a href="/barang/tambah" class="btn btn-primary">TAMBAH</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID BARANG</th>
          <th>BARANG KODE</th>
          <th>BARANG NAMA</th>
          <th>ID JENIS</th>
          <th>ID SUPPLIER</th>
          <th>HARGA JUAL</th>
          <th>BARANG STATUS</th>
          <th colspan="2" style="text-align: center;">AKSI</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($barang as $a)
        <tr>
          <td>{{ $a->id_barang }}</td>
          <td>{{ $a->barang_kode }}</td>
          <td>{{ $a->barang_nama }}</td>
          <td>{{ $a->jenis_nama }}</td>
          <td>{{ $a->supplier_nama}}</td>
          <td>{{ $a->harga_jual }}</td>
          <td>{{ $a->barang_status }}</td>
          <td><a href="/barang/ubah{{ $a->id }}" class="btn btn-warning">EDIT</a></td>
          <td><a href="/barang/delete{{ $a->id }}" class="btn btn-danger">DELETE</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection
