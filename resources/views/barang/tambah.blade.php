@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah data baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/barang/simpan">
        @csrf
      <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">barang kode</label>
              <input type="text" class="form-control" id="" name="barang_kode" placeholder="barang kode">
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">barang nama</label>
                  <input type="text" class="form-control" id="" name="barang_nama" placeholder="barang_nama">
                </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">id jenis</label>
                      <select name="id_jenis" class="form-control">
                        <option value="">Silahkan pilih jenis</option>
                        @foreach ($jenis as $j)
                        <option value="{{ $j->id_jenis }}">{{ $j->jenis_nama}}</option>
                        @endforeach
                      </select>
                    </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">id supplier</label>
                          <select name="id_supplier" class="form-control">
                            <option value="">Silahkan pilih jenis</option>
                            @foreach ($supplier as $s)
                            <option value="{{ $s->id_supplier }}">{{ $s->supplier_nama}}</option>
                            @endforeach
                          </select>
                        </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">harga jual</label>
                              <input type="text" class="form-control" id="" name="harga_jual" placeholder="harga jual">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">barang status</label>
                                <input type="text" class="form-control" id="" name="barang_status" placeholder="barang status">
                              </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
  </div>
@endsection
