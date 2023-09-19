<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

date_default_timezone_set('Asia/Jakarta');


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/user', [
            'user' => User::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'level' => $request->level,
            'password' => Hash::make($request->password),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/user')->with('success', 'berhasil dibuat');
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->level = $request->level;
        $user->password = Hash::make($request->password);
        $user->updated_at = date('Y-m-d H:i:s');

        $user->save();
        return redirect('/user')->with('success', 'berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('success', 'berhasil dihapus');
    }
}
