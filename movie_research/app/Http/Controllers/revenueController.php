<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Film;
Use App\Models\Theater;


class revenueController extends Controller
{
    function index(){
        $films = Film::get();
        return view('revenue', ['films' => $films]);
    }

    function getRevenue(Request $request) {
        $parts = explode('-', $request->date);

        // Check if we have exactly 3 parts (MM, DD, YYYY)
        if (count($parts) !== 3 || strlen($request->date) != 10 ) {
            //TODO Id like to throw better error handling here
            echo "Bad Input";
        }

    $top_theater = DB::table('showings')
        ->select('theater_id', DB::raw('SUM(revenue) as total_revenue'))
        ->where('date', '=', $request->date)
        ->groupBy('theater_id')
        ->orderByDesc('total_revenue')
        ->first();
    $topTheaterRow = Theater::select('theater_name')->where('id', '=', $top_theater->theater_id)->get();
    $topTheaterName = $topTheaterRow[0]->theater_name;

    echo "The Top Theater for that day was: $topTheaterName!";

    }
}
