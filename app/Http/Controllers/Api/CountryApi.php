<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CountryApi extends Controller
{
    public function regencies(Request $request){
        $data = $request->all();

        $table = DB::table('regencies')->select('id','name')->orderby('name','asc');

        $regencies = $table->get();

        if (count(array($table)) == 0 ) {
            return response()->json([
                'status_code' => 204,
                'data' => $regencies
            ],200);
        } else {
            return response()->json([
                'status_code' => 200,
                'data' => $regencies
            ],200);
        }
    }

    public function villages(Request $request){
        $data = $request->all();

        $table = DB::table('regencies')->select('id','name')->orderby('name','asc');

        $villages = $table->get();

        if (count(array($table)) == 0 ) {
            return response()->json([
                'status_code' => 204,
                'data' => $villages
            ],200);
        } else {
            return response()->json([
                'status_code' => 200,
                'data' => $villages
            ],200);
        }
    }
}
