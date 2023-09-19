<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

date_default_timezone_set('Asia/Jakarta');

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('brand/brand', [
            'brand' => Brand::all()
        ]);
    }

    public function store(Request $request)
    {
        Brand::create([
            'nama_brand' => $request->nama_brand,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/brand')->with('success', 'berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        $brand->nama_brand = $request->nama_brand;
        $brand->updated_at = date('Y-m-d H:i:s');

        $brand->save();
        return redirect('/brand')->with('success', 'berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/brand')->with('success', 'berhasil dihapus');
    }
}
