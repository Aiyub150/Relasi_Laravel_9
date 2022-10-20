@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah data baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/supplier/simpan">
        @csrf
      <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">supplier nama</label>
              <input type="text" class="form-control" id="" name="supplier_nama" placeholder="supplier nama">
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">supplier alamat</label>
                  <input type="text" class="form-control" id="" name="supplier_alamat" placeholder="supplier alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">supplier phone</label>
                    <input type="text" class="form-control" id="" name="supplier_phone" placeholder="supplier phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">supplier status</label>
                    <input type="text" class="form-control" id="" name="supplier_status" placeholder="supplier status">
                  </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
  </div>
@endsection
