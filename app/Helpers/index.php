<?php

use Illuminate\Support\Facades\Validator;

function userValidation($request) {
    $req = $request;
    $validated = Validator::make($req, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'number_phone' => 'required|string|max:255',
        'password' => 'required|string|min:6|confirmed',
    ]);
    return $validated;
}

function userUpdateValidation($request) {
    $req = $request;
    $validated = Validator::make($req, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'number_phone' => 'required|max:255',
    ]);
    return $validated;
}

function updatePasswordValidation($request) {
    $req = $request;
    $validated = Validator::make($req, [
        'password' => 'required|string|min:6|confirmed',
    ]);
    return $validated;
}

function rupiah($angka){
    $hasil_rupiah = number_format($angka,0,',','.');
    return $hasil_rupiah;

}
