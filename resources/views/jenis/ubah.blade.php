@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ubah data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @foreach ($jenis as $j)
    <form method="post" action="/jenis/update">
        @csrf
      <div class="card-body">
        
            <div class="form-group">
              <label for="exampleInputEmail1">jenis nama</label>
              <input type="text" class="form-control" id="" name="jenis_nama" placeholder="jenis nama" value="{{ $j->jenis_nama }}">
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">jenis status</label>
                  <input type="text" class="form-control" id="" name="jenis_status" placeholder="jenis status" value="{{ $j->jenis_status }}">
                </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
    @endforeach
  </div>
@endsection
