<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Brand;
use App\Models\Barang;
use App\Models\BrgMsk;
use App\Models\BrgKeluar;
use App\Models\BrgRetur;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::count();
        $brand = Brand::count();
        $barang = Barang::sum('stok');
        $barangMasuk = BrgMsk::sum('jml_brg_masuk');
        $barangKeluar = BrgKeluar::sum('jml_brg_keluar');
        $barangRetur = BrgRetur::sum('jml_brg_retur');
        return view('home', compact('user', 'brand', 'barang', 'barangMasuk', 'barangKeluar', 'barangRetur'));
    }
}
