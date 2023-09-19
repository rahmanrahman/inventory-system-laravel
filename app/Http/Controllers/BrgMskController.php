<?php

namespace App\Http\Controllers;

use App\models\Barang;
use App\models\BrgMsk;
use App\models\Brand;
use DB;

date_default_timezone_set('Asia/Jakarta');

use Illuminate\Http\Request;

class BrgMskController extends Controller
{
    public function index()
    {
        $brg_msk = BrgMsk::join('barang', 'barang.id', '=', 'barang_masuk.id_barang')
            ->join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang_masuk.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
            ->get();
        $barang = Barang::all();

        return view('/transaksi/barang_masuk/barang_masuk', compact('brg_msk', 'barang'));
    }

    public function create()
    {
        $barang = Barang::all();
        $msk = BrgMsk::all();
        return view('/transaksi/barang_masuk/tambah', compact('barang', 'msk'));
    }

    public function ajax(Request $request)
    {
        $id_barang['id_barang'] = $request->id_barang;
        $ajax_barang            = Barang::where('id', $id_barang)->get();
        return view('/transaksi/barang_masuk/ajax', compact('ajax_barang'));
    }

    public function store(Request $request)
    {
        $barang = Barang::find($request->id_barang);
        BrgMsk::create([
            'no_brg_masuk' => $request->no_brg_masuk,
            'id_barang' => $request->id_barang,
            'jml_brg_masuk' => $request->jml_brg_masuk,
            'total' => $request->total,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        $barang->stok += $request->jml_brg_masuk;
        $barang->save();
        return redirect('/barang_masuk')->with('success', 'stok berhasil ditambahkan');
    }
}
