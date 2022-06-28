<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\Reservasi;
use App\Models\FrontendBooking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index(){
        $array = [
            'home' => DB::table('master_home_cares')->select('id','type','name','price')->get(),
            'baby' => DB::table('master_baby_spas')->select('id','type','name','price')->get(),
        ];

        return view('pages.frontend.booking',$array);
    }

    public function store(Request $request){
        $req = $request->all();
        $msg = [
            'full_name.required' => 'Silakan isi nama anda.',
            'type_booking.required' => 'Silakan pilih service.',
            'list_service.required' => 'Silakan pilih list harga.',
            'date_booking.required' => 'Silakan isi tanggal reservasi.',
            'hour_booking.required' => 'Silakan isi jam reservasi.',
            'number_phone.required' => 'Silakan isi nomor handphone.',
            'address.required' => 'Silakan isi alamat lengkap.',
            'kecamatan.required' => 'Silakan isi Kecamatan.',
            'kelurahan.required' => 'Silakan isi Kelurahan.',
        ];
        $validator = Validator::make($req,[
            'full_name' => 'required',
            'type_booking' => 'required',
            'list_service' => 'required',
            'date_booking' => 'required',
            'hour_booking' => 'required',
            'number_phone' => 'required',
            'address' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
        ],$msg);

        if($validator->fails()){
            return response()->json([
                'status' => 'fail',
                'message' => $validator->errors()->first()
            ],422);
        }

        $input = [
            'full_name' => $req['full_name'],
            'type_booking' => $req['type_booking'],
            'email' => isset($req['email']) ? $req['email'] : "",
            'list_service' => $req['list_service'],
            'date_booking' => Carbon::parse($req['date_booking']),
            'hour_booking' => $req['hour_booking'],
            'number_phone' => $req['number_phone'],
            'address' => $req['address'],
            'kecamatan' => $req['kecamatan'],
            'kelurahan' => $req['kelurahan'],
            'wa' => $req['wa'] ?: null,
        ];

        $res = FrontendBooking::firstOrCreate($input);
        if($res){
//            vieramomandbabyspa@gmail.com
            Mail::to('vikymuhammadalif@gmail.com')
                ->send(new Reservasi(
                    $res->full_name,$res->number_phone,$res->type_booking,$res->list_service,Carbon::parse($res->date_booking)->format('d M Y'),
                    $res->hour_booking,$res->kecamatan, $res->kelurahan, $res->adress,substr($res->wa ?: $res->number_phone,1)
                ));

            return response()->json([
                'status' => 'ok',
                'message' => 'Berhasil membuat jadwal Reservasi.'
            ],201);
        }
    }
}
