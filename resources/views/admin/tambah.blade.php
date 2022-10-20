@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah data baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="/admin/simpan">
        @csrf
      <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">username</label>
              <input type="text" class="form-control" id="" name="username" placeholder="username">
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">password</label>
                  <input type="text" class="form-control" id="" name="password" placeholder="password">
                </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">admin level</label>
                      <input type="text" class="form-control" id="" name="admin_level" placeholder="admin level">
                    </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">admin nama</label>
                          <input type="text" class="form-control" id="" name="admin_nama" placeholder="admin nama">
                        </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">admin status</label>
                              <input type="text" class="form-control" id="" name="admin_status" placeholder="admin status">
                            </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
  </div>
@endsection
