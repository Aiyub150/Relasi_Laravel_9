@extends('layout.master')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Admin</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <a href="/admin/tambah" class="btn btn-primary">TAMBAH</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID ADMIN</th>
          <th>USERNAME</th>
          <th>PASSWORD</th>
          <th>ADMIN LEVEL</th>
          <th>ADMIN NAMA</th>
          <th>ADMIN STATUS</th>
          <th colspan="2" style="text-align: center;">AKSI</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($admin as $a)
        <tr>
          <td>{{ $a->id_admin }}</td>
          <td>{{ $a->username }}</td>
          <td>{{ $a->password }}</td>
          <td>{{ $a->admin_level }}</td>
          <td>{{ $a->admin_nama }}</td>
          <td>{{ $a->admin_status }}</td>
          <td><a href="/admin/ubah{{ $a->id }}" class="btn btn-warning">EDIT</a></td>
          <td><a href="/admin/delete{{ $a->id }}" class="btn btn-danger">DELETE</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
@endsection
