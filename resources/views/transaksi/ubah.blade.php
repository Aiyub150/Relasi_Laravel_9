@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah data baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @foreach($transaksi as $t)
    <form method="post" action="/transaksi/simpan">
        @csrf
        <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Id admin</label>
              <input type="text" class="form-control" id="" name="id_admin" placeholder="id admin" value="{{ $t->id_admin }}">
            </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Transaksi tanggal</label>
                  <input type="date" class="form-control" id="" name="transaksi_tanggal" placeholder="transaksi_tanggal" value="{{ $t->transaksi_status }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Transaksi nota</label>
                    <input type="text" class="form-control" id="" name="transaksi_nota" placeholder="transaksi_nota" value="{{ $t->transaksi_nonota }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Transaksi status</label>
                    <input type="text" class="form-control" id="" name="transaksi_status" placeholder="transaksi status" value="{{ $t->transaksi_status }}">
                  </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
    @endforeach
  </div>
@endsection
