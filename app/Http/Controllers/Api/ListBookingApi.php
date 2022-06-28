<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ListBookingApi extends Controller
{
    public function main(Request $request){
        $data = $request->all();

        $home = DB::table('master_home_cares')->select('id','type','name','price');
        $baby = DB::table('master_baby_spas')->select('id','type','name','price');
        $table = $home->unionAll($baby);
        $babySpa = $table->get();

        if ( isset($data['filter']) ) {
            $table->where( "type" , "LIKE" ,($data['filter'] ? '%'.$data['filter'].'%' : '%%') );
        }

        if (count(array($table)) == 0 ) {
            return response()->json([
                'status_code' => 204,
                'data' => $babySpa
            ],200);
        } else {
            return response()->json([
                'status_code' => 200,
                'data' => $babySpa
            ],200);
        }
    }
}
