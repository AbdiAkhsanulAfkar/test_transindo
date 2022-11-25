<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
{
    $huruf = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $kode = strtoupper(substr(str_shuffle($huruf), 0, 7));
	DB::table('biodata')->insert([
        'kode' => $kode,
		'nama' => $request->nama,
		'email' => $request->email,
		'alamat' => $request->alamat,
		'no_hp' => $request->no_hp,
        "created_at" =>  date('Y-m-d H:i:s'),
        "updated_at" => date('Y-m-d H:i:s'),
	]);
    DB::table('tranksaksi')->truncate();
    DB::table('tranksaksi')->insert([                
        'kode' => $kode,
		'nama' => $request->nama,
		'email' => $request->email,
		'alamat' => $request->alamat,
		'no_hp' => $request->no_hp,
        "created_at" =>  date('Y-m-d H:i:s'),
        "updated_at" => date('Y-m-d H:i:s'),
	]);
	return redirect('/detail');
 
}
}
