@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah data baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/transaksi/simpan">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">id admin</label>
                <select name="id_admin" class="form-control">
                  <option value="">Silahkan pilih admin</option>
                  @foreach ($admin as $a)
                  <option value="{{ $a->id_admin }}">{{ $a->admin_nama}}</option>
                  @endforeach
                </select>
            </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Transaksi tanggal</label>
                  <input type="date" class="form-control" id="" name="transaksi_tanggal" placeholder="transaksi_tanggal">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Transaksi nota</label>
                    <input type="text" class="form-control" id="" name="transaksi_nonota" placeholder="transaksi_nota">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Transaksi status</label>
                    <input type="text" class="form-control" id="" name="transaksi_status" placeholder="transaksi status">
                  </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
  </div>
@endsection
