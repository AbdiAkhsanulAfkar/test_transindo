<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function getAll()
    {
        $biodata = DB::table('biodata')->get();
 
    	return view('home_admin',['biodata' => $biodata]);
    }
    public function delete($id)
{
	DB::table('biodata')->where('id',$id)->delete();
		
	return redirect('/admin');
}
}
