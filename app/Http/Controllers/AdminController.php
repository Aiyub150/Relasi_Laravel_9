<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
       $admin = DB::table('tbl_admin')->get();
       return view('admin.index',compact('admin'));
    }
    public function tambah()
    {
       return view('admin.tambah');
    }
    public function simpan(Request $request)
    {

        $simpan = Admin::create([
            'username'=>$request->username,
            'password'=>$request->password,
            'admin_level'=>$request->admin_level,
            'admin_nama'=>$request->admin_nama,
            'admin_status'=>$request->admin_status
        ]);
        echo $simpan->id_admin;
        return redirect('/admin');
    }
    public function ubah($id)
    {
        $admin = DB::table('tbl_admin')->where('id',$id)->get();
        return view('admin.ubah',['admin'=>$admin]);
    }
    public function update(Request $request)
    {
        DB::table('tbl_admin')->where('id_admin',$request->id_admin)->update([
            'id_admin'=>$request->id_admin,
            'username'=>$request->username,
            'password'=>$request->password,
            'admin_level'=>$request->admin_level,
            'admin_nama'=>$request->admin_nama,
            'admin_status'=>$request->admin_status
        ]);

        return redirect('/admin');
    }
    public function delete($id)
    {
        DB::table('tbl_admin')->where('id',$id)->delete();
        return redirect('/admin');
    }
}
