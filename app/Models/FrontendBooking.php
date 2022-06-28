<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendBooking extends Model
{
    use HasFactory;

        protected $fillable = ['full_name','type_booking','email','list_service',
        'date_booking','hour_booking','number_phone','address','kecamatan','kelurahan','wa'
        ];
}
