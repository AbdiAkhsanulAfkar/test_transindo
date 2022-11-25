<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function getReport()
    {
        $report = DB::table('biodata')->select(DB::raw('status,count(status) as count'))->groupBy('status')->get();
        

        return view('report_admin', ['report' => $report]);
    }
}
