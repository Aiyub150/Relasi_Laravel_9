@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ubah data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @foreach ($barang as $b)
    <form method="post" action="/barang/update">
        @csrf
      <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">barang kode</label>
              <input type="text" class="form-control" id="" name="barang_kode" placeholder="barang kode" value="{{ $b->barang_kode }}">
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">barang nama</label>
                  <input type="text" class="form-control" id="" name="barang_nama" placeholder="barang_nama" value="{{ $b->barang_nama }}">
                </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">id jenis</label>
                      <input type="text" class="form-control" id="" name="id_jenis" placeholder="id_jenis" value="{{ $b->id_jenis }}">
                    </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">id supplier</label>
                          <input type="text" class="form-control" id="" name="id_supplier" placeholder="id supplier" value="{{ $b->id_supplier }}">
                        </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">harga jual</label>
                              <input type="text" class="form-control" id="" name="harga_jual" placeholder="harga jual" value="{{ $b->harga_jual }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">barang status</label>
                                <input type="text" class="form-control" id="" name="barang_status" placeholder="barang status" value="{{ $b->barang_status }}">
                              </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
    @endforeach
  </div>
@endsection
