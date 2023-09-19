<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Barang;
use App\models\BrgKeluar;
use App\models\Brand;

date_default_timezone_set('Asia/Jakarta');

class BrgKeluarController extends Controller
{
    public function index()
    {
        $brg_keluar = BrgKeluar::join('barang', 'barang.id', '=', 'barang_keluar.id_barang')
            ->join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang_keluar.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
            ->get();
        $barang = Barang::all();

        return view('/transaksi/barang_keluar/barang_keluar', compact('brg_keluar', 'barang'));
    }

    public function create()
    {
        $barang = Barang::all();
        $keluar = BrgKeluar::all();

        return view('/transaksi/barang_keluar/tambah', compact('barang', 'keluar'));
    }

    public function ajax(Request $request)
    {
        $id_barang['id_barang'] = $request->id_barang;
        $ajax_barang            = Barang::where('id', $id_barang)->get();
        return view('/transaksi/barang_keluar/ajax', compact('ajax_barang'));
    }

    public function store(Request $request)
    {

        $barang = Barang::find($request->id_barang);
        if ($barang->stok < $request->jml_brg_keluar) {
            return redirect('/barang_keluar')->with('error', 'jumlah kurang dari stok');
        } else {
            BrgKeluar::create([
                'no_brg_keluar' => $request->no_brg_keluar,
                'id_barang' => $request->id_barang,
                'jml_brg_keluar' => $request->jml_brg_keluar,
                'total' => $request->total,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            $barang->stok -= $request->jml_brg_keluar;
            $barang->save();
            return redirect('/barang_keluar')->with('success', 'berhasil dibuat');
        }
    }
}
