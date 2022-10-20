@extends('layout.master')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Jenis</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <a href="/jenis/tambah" class="btn btn-primary">TAMBAH</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID JENIS</th>
          <th>JENIS NAMA</th>
          <th>JENIS STATUS</th>
          <th colspan="2" style="text-align: center;">AKSI</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jenis as $a)
        <tr>
          <td>{{ $a->id_jenis }}</td>
          <td>{{ $a->jenis_nama }}</td>
          <td>{{ $a->jenis_status }}</td>
          <td><a href="/jenis/ubah{{ $a->id }}" class="btn btn-warning">EDIT</a></td>
          <td><a href="/jenis/delete{{ $a->id }}" class="btn btn-danger">DELETE</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection
