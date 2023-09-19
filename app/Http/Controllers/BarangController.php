<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Brand;
use Illuminate\Http\Request;

date_default_timezone_set('Asia/Jakarta');

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang.*', 'brand.nama_brand')
            ->get();
        $brand = Brand::all();

        return view('/barang/barang', compact('barang', 'brand'));
    }

    public function store(Request $request)
    {
        Barang::create([
            'id_brand' => $request->id_brand,
            'model' => $request->model,
            'stok' => $request->stok,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/barang')->with('success', 'berhasil dibuat');
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        $barang->model = $request->model;
        $barang->stok = $request->stok;
        $barang->jenis = $request->jenis;
        $barang->harga = $request->harga;
        $barang->updated_at = date('Y-m-d H:i:s');

        $barang->save();
        return redirect('/barang')->with('success', 'berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang')->with('success', 'berhasil dihapus');
    }
}
