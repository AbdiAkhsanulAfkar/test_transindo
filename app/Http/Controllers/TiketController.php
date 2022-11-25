<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function getAll()
    {
        $biodata = DB::table('biodata')->get();

        return view('home_admin', ['biodata' => $biodata]);
    }
    public function delete($id)
    {
        DB::table('biodata')->where('id', $id)->delete();

        return redirect('/admin');
    }
    public function edit($id)
    {
        $tiket = DB::table('biodata')->where('id', $id)->get();
        return view('edit_admin', ['tiket' => $tiket]);
    }
    public function update(Request $request)
    {
        DB::table('biodata')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);
        return redirect('/admin');
    }
    public function search_kode(Request $request)
    {
        $tiket = DB::table('biodata')->where('kode', $request->kode)->get();
        return view('result_admin', ['tiket' => $tiket]);
        
    }
    public function update_verifikasi(Request $request)
    {
        $tiket = DB::table('biodata')->where('kode', $request->kode)->update([
            'status' => "Sudah Bayar"
        ]);
        
        // return redirect()->route('kode', ['kode' => $request->kode]);

        return redirect()->action([TiketController::class, 'search_kode'],['kode' => $request->kode]);
        // http://127.0.0.1:8000/admin/kode?79WHEZF
    }
        
    
}
