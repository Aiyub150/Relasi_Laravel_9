@extends('layout.master')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Jenis</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <a href="/supplier/tambah" class="btn btn-primary">TAMBAH</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID SUPPLIER</th>
          <th>SUPPLIER NAMA</th>
          <th>SUPPLIER ALAMAT</th>
          <th>SUPPLIER PHONE</th>
          <th>SUPPLIER STATUS</th>
          <th colspan="2" style="text-align: center;">AKSI</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($supplier as $a)
        <tr>
          <td>{{ $a->id_supplier }}</td>
          <td>{{ $a->supplier_nama }}</td>
          <td>{{ $a->supplier_alamat }}</td>
          <td>{{ $a->supplier_phone }}</td>
          <td>{{ $a->supplier_status }}</td>
          <td><a href="/supplier/ubah{{ $a->id }}" class="btn btn-warning">EDIT</a></td>
          <td><a href="/supplier/delete{{ $a->id }}" class="btn btn-danger">DELETE</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection
