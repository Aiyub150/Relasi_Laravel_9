<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
       $jenis = DB::table('tbl_jenis')->get();
       return view('jenis.index',compact('jenis'));
    }
    public function tambah()
    {
       return view('jenis.tambah');
    }
    public function simpan(Request $request)
    {

        $simpan = Jenis::create([
           'jenis_nama'=>$request->jenis_nama,
           'jenis_status'=>$request->jenis_status
        ]);
        echo $simpan->id_jenis;

        return redirect('/jenis');
    }
    public function ubah($id)
    {
        $jenis = DB::table('tbl_jenis')->where('id',$id)->get();
        return view('jenis.ubah',['jenis'=>$jenis]);
    }
    public function update(Request $request)
    {
        DB::table('tbl_jenis')->where('id_jenis',$request->id_jenis)->update([
            'jenis_nama'=>$request->jenis_nama,
            'jenis_status'=>$request->jenis_status
        ]);
        return redirect('/jenis');
    }
    public function delete($id)
    {
        DB::table('tbl_jenis')->where('id',$id)->delete();
        return redirect('/jenis');
    }
}
