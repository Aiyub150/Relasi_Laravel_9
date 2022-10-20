<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TransaksiController extends Controller
{
    public function index()
    {
       $transaksi = DB::table('tbl_transaksi')
       ->join('tbl_admin','tbl_transaksi.id_admin','=','tbl_admin.id_admin')
       ->get();
       return view('transaksi.index',compact('transaksi'));
    }
    public function tambah()
    {
       $admin = DB::table('tbl_admin')->get();
       return view('transaksi.tambah',compact('admin'));
    }
    public function simpan(Request $request)
    {

        $simpan = Transaksi::create([
            'id_admin'=>$request->id_admin,
            'transaksi_tanggal'=>$request->transaksi_tanggal,
            'transaksi_nonota'=>$request->transaksi_nonota,
            'transaksi_status'=>$request->transaksi_status
        ]);
        echo $simpan->id_transaksi;

        return redirect('/transaksi');
    }
    public function ubah($id)
    {
        $transaksi = DB::table('tbl_transaksi')->where('id',$id)->get();
        return view('transaksi.ubah',['transaksi'=>$transaksi]);
    }
    public function update(Request $request)
    {
        DB::table('tbl_transaksi')->where('id_transaksi',$request->id_transaksi)->update([
            'id_admin'=>$request->id_admin,
            'transaksi_tanggal'=>$request->transaksi_tanggal,
            'transaksi_nonota'=>$request->transaksi_nonota,
            'transaksi_status'=>$request->transaksi_status
        ]);
        return redirect('/transaksi');
    }
    public function delete($id)
    {
        DB::table('tbl_transaksi')->where('id',$id)->delete();
        return redirect('/transaksi');
    }
}
