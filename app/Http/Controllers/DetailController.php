<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailController extends Controller
{
    public function detail()
    {
    	$tranksaksi = DB::table('tranksaksi')->get();
 
    	return view('detail',['tranksaksi' => $tranksaksi]);
 
    }
}
