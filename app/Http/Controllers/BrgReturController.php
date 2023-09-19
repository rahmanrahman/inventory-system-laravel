<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Barang;
use App\models\BrgRetur;
use App\models\Brand;

date_default_timezone_set('Asia/Jakarta');

class BrgReturController extends Controller
{
    public function index()
    {
        $brg_retur = BrgRetur::join('barang', 'barang.id', '=', 'barang_retur.id_barang')
            ->join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang_retur.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
            ->get();
        $barang = Barang::all();

        return view('/transaksi/barang_retur/barang_retur', compact('brg_retur', 'barang'));
    }

    public function create()
    {
        $barang = Barang::all();
        $retur = BrgRetur::all();

        return view('/transaksi/barang_retur/tambah', compact('barang', 'retur'));
    }

    public function ajax(Request $request)
    {
        $id_barang['id_barang'] = $request->id_barang;
        $ajax_barang            = Barang::where('id', $id_barang)->get();
        return view('/transaksi/barang_retur/ajax', compact('ajax_barang'));
    }

    public function store(Request $request)
    {
        $barang = Barang::find($request->id_barang);
        if ($barang->stok < $request->jml_brg_retur) {
            return redirect('/barang_retur')->with('error', 'jumlah kurang dari stok');
        } else {
            BrgRetur::create([
                'no_brg_retur' => $request->no_brg_retur,
                'id_barang' => $request->id_barang,
                'jml_brg_retur' => $request->jml_brg_retur,
                'total' => $request->total,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            $barang->stok -= $request->jml_brg_retur;
            $barang->save();
            return redirect('/barang_retur')->with('success', 'berhasil dibuat');
        }
    }
}
