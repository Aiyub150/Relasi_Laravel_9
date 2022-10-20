<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function index()
    {
       $supplier = DB::table('tbl_supplier')->get();
       return view('supplier.index',compact('supplier'));
    }
    public function tambah()
    {
       return view('supplier.tambah');
    }
    public function simpan(Request $request)
    {

        $simpan = Supplier::create([
           'supplier_nama'=>$request->supplier_nama,
           'supplier_alamat'=>$request->supplier_alamat,
           'supplier_phone'=>$request->supplier_phone,
           'supplier_status'=>$request->supplier_status
        ]);
        echo $simpan->id_supplier;
        return redirect('/supplier');
    }
    public function ubah($id)
    {
        $supplier = DB::table('tbl_supplier')->where('id',$id)->get();
        return view('supplier.ubah',['supplier'=>$supplier]);
    }
    public function update(Request $request)
    {
        DB::table('tbl_supplier')->where('id_supplier',$request->id_supplier)->update([
            'id_supplier'=>$request->id_supplier,
            'supplier_nama'=>$request->supplier_nama,
            'supplier_alamat'=>$request->supplier_alamat,
            'supplier_phone'=>$request->supplier_phone,
            'supplier_status'=>$request->supplier_status
        ]);
        return redirect('/supplier');
    }
    public function delete($id)
    {
        DB::table('tbl_supplier')->where('id',$id)->delete();
        return redirect('/supplier');
    }
}
