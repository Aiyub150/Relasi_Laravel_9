@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ubah data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form method="post" action="/admin/update">
        {{ csrf_field() }}
      <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">username</label>
              <input type="text" class="form-control" name="username" placeholder="username" value="{{ $admin->username }}">
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">password</label>
                  <input type="text" class="form-control"  name="password" placeholder="password" value="{{ $admin->password }}">
                </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">admin level</label>
                      <input type="text" class="form-control"  name="admin_level" placeholder="admin level" value="{{ $admin->admin_level }}">
                    </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">admin nama</label>
                          <input type="text" class="form-control"  name="admin_nama" placeholder="admin nama" value="{{ $admin->admin_nama }}">
                        </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">admin status</label>
                              <input type="text" class="form-control" name="admin_status" placeholder="admin status" value="{{ $admin->admin_status }}">
                            </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>

  </div>
@endsection
