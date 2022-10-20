<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    public function index()
    {
       $barang = DB::table('tbl_barang')
       ->join('tbl_jenis','tbl_barang.id_jenis','=','tbl_jenis.id_jenis')
       ->join('tbl_supplier','tbl_barang.id_supplier','=','tbl_supplier.id_supplier')
       ->get();
       return view('barang.index',compact('barang'));
    }
    public function tambah()
    {
       $jenis = DB::table('tbl_jenis')->get();
       $supplier = DB::table('tbl_supplier')->get();
       return view('barang.tambah',compact(['jenis','supplier']));
    }
    public function simpan(Request $request)
    {

        $simpan = Barang::create([
            'barang_kode'=>$request->barang_kode,
            'barang_nama'=>$request->barang_nama,
            'id_jenis'=>$request->id_jenis,
            'id_supplier'=>$request->id_supplier,
            'harga_jual'=>$request->harga_jual,
            'barang_status'=>$request->barang_status
        ]);
        echo $simpan->id_barang;
        return redirect('/barang');
    }
    public function ubah($id)
    {
        $barang = DB::table('tbl_barang')->where('id',$id)->get();
        return view('barang.ubah',['barang'=>$barang]);
    }
    public function update(Request $request)
    {
        DB::table('tbl_barang')->where('id_barang',$request->id_barang)->update([
            'id_barang'=>$request->id_barang,
            'barang_kode'=>$request->barang_kode,
            'barang_nama'=>$request->barang_nama,
            'id_jenis'=>$request->id_jenis,
            'id_supplier'=>$request->id_supplier,
            'harga_jual'=>$request->harga_jual,
            'barang_status'=>$request->barang_status
        ]);
        return redirect('/barang');
    }
    public function delete($id)
    {
        DB::table('tbl_barang')->where('id',$id)->delete();
        return redirect('/barang');
    }
}
