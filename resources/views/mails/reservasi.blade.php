<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@component('mail::message')

    List Reservasi Hari ini {{\Carbon\Carbon::now()->format('d M Y')}}

    Nama : {{$full_name}}

    No Handphone : {{$no_hp}}

    No WhatssApp : 0{{$wa}}

    Service : {{$service}}

    List Harga Service : {{$list_harga}}

    Tanggal Reservasi : {{$tgl_reservasi}}

    Jam Reservasi : {{$jam_reservasi}}

    Kecamatan : {{$kecamatan}}

    Kelurahan : {{$kelurahan}}

    Alamat Lengkap : {{$alamat}}

    Click di bawah sini untuk link WhatssApp Customer : https://api.whatsapp.com/send?phone=+62{{$wa}}
@endcomponent

</body>
</html>
