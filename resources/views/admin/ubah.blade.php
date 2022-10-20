@extends('layout.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ubah data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @foreach ($admin as $a)
    <form method="post" action="/admin/update">
        @csrf
      <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">username</label>
              <input type="text" class="form-control" id="" name="username" placeholder="username" value="{{ $a->username }}">
            </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">password</label>
                  <input type="text" class="form-control" id="" name="password" placeholder="password" value="{{ $a->password }}">
                </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">admin level</label>
                      <input type="text" class="form-control" id="" name="admin_level" placeholder="admin level" value="{{ $a->admin_level }}">
                    </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">admin nama</label>
                          <input type="text" class="form-control" id="" name="admin_nama" placeholder="admin nama" value="{{ $a->admin_nama }}">
                        </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">admin status</label>
                              <input type="text" class="form-control" id="" name="admin_status" placeholder="admin status" value="{{ $a->admin_status }}">
                            </div>
      <div class="card-footer">
        <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
      </div>
    </form>
    @endforeach
  </div>
@endsection
