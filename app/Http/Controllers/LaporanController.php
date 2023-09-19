<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Brand;
use App\Models\Barang;
use App\Models\BrgMsk;
use App\Models\BrgKeluar;
use App\Models\BrgRetur;


class LaporanController extends Controller
{
    public function lap_barang()
    {
        $barang = Barang::join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang.*', 'brand.nama_brand')
            ->get();

        return view('/laporan/barang/lap_barang', compact('barang'));
    }

    public function cetak_barang()
    {
        $barang = Barang::join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang.*', 'brand.nama_brand')
            ->get();

        return view('/laporan/barang/cetak_barang', compact('barang'));
    }

    public function lap_user()
    {
        $user = User::all();

        return view('/laporan/user/lap_user', compact('user'));
    }

    public function cetak_user()
    {
        $user = User::all();

        return view('/laporan/user/cetak_user', compact('user'));
    }

    public function lap_brand()
    {
        $brand = Brand::all();

        return view('/laporan/brand/lap_brand', compact('brand'));
    }

    public function cetak_brand()
    {
        $brand = Brand::all();

        return view('/laporan/brand/cetak_brand', compact('brand'));
    }
    public function lap_brg_masuk()
    {

        $brg_msk = BrgMsk::join('barang', 'barang.id', '=', 'barang_masuk.id_barang')
            ->join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang_masuk.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
            ->get();
        return view('/laporan/brg_msk/lap_brg_msk', compact('brg_msk'));
    }

    public function cetak_brg_masuk(Request $request)
    {
        $tgl_mulai = $request->tgl_mulai;
        $tgl_akhir = $request->tgl_akhir;

        if ($tgl_mulai and $tgl_akhir) {
            $brg_msk = BrgMsk::join('barang', 'barang.id', '=', 'barang_masuk.id_barang')
                ->join('brand', 'brand.id', '=', 'barang.id_brand')
                ->select('barang_masuk.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
                ->whereBetween('barang_masuk.created_at', [$tgl_mulai, $tgl_akhir])
                ->get();
            $sum_total = BrgMsk::whereBetween('created_at', [$tgl_mulai, $tgl_akhir])
                ->sum('total');
        } else {
            $brg_msk = BrgMsk::join('barang', 'barang.id', '=', 'barang_masuk.id_barang')
                ->join('brand', 'brand.id', '=', 'barang.id_brand')
                ->select('barang_masuk.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
                ->get();
        }

        return view('/laporan/brg_msk/cetak_brg_msk', compact('brg_msk', 'sum_total', 'tgl_mulai', 'tgl_akhir'));
    }

    public function lap_brg_keluar()
    {
        $brg_keluar = BrgKeluar::join('barang', 'barang.id', '=', 'barang_keluar.id_barang')
            ->join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang_keluar.*', 'brand.nama_brand', 'barang.model', 'barang.harga')

            ->get();
        $barang = Barang::all();

        return view('/laporan/brg_keluar/lap_brg_keluar', compact('brg_keluar', 'barang'));
    }

    public function cetak_brg_keluar(Request $request)
    {
        $tgl_mulai = $request->tgl_mulai;
        $tgl_akhir = $request->tgl_akhir;

        if ($tgl_mulai and $tgl_akhir) {
            $brg_keluar = BrgKeluar::join('barang', 'barang.id', '=', 'barang_keluar.id_barang')
                ->join('brand', 'brand.id', '=', 'barang.id_brand')
                ->select('barang_keluar.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
                ->whereBetween('barang_keluar.created_at', [$tgl_mulai, $tgl_akhir])
                ->get();
            $sum_total = BrgKeluar::whereBetween('created_at', [$tgl_mulai, $tgl_akhir])
                ->sum('total');
        } else {
            $brg_keluar = BrgKeluar::join('barang', 'barang.id', '=', 'barang_keluar.id_barang')
                ->join('brand', 'brand.id', '=', 'barang.id_brand')
                ->select('barang_keluar.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
                ->get();
        }

        return view('/laporan/brg_keluar/cetak_brg_keluar', compact('brg_keluar', 'sum_total'));
    }

    public function lap_brg_retur()
    {

        $brg_retur = BrgRetur::join('barang', 'barang.id', '=', 'barang_retur.id_barang')
            ->join('brand', 'brand.id', '=', 'barang.id_brand')
            ->select('barang_retur.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
            ->get();

        return view('/laporan/brg_retur/lap_brg_retur', compact('brg_retur'));
    }

    public function cetak_brg_retur(Request $request)
    {
        $tgl_mulai = $request->tgl_mulai;
        $tgl_akhir = $request->tgl_akhir;

        if ($tgl_mulai and $tgl_akhir) {
            $brg_retur = BrgRetur::join('barang', 'barang.id', '=', 'barang_retur.id_barang')
                ->join('brand', 'brand.id', '=', 'barang.id_brand')
                ->select('barang_retur.*', 'brand.nama_brand', 'barang.model', 'barang.harga')
                ->whereBetween('barang_retur.created_at', [$tgl_mulai, $tgl_akhir])
                ->get();
            $sum_total = BrgRetur::whereBetween('created_at', [$tgl_mulai, $tgl_akhir])
                ->sum('total');
        } else {
        }

        return view('/laporan/brg_retur/cetak_brg_retur', compact('brg_retur', 'sum_total'));
    }
}
