<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use QrCode;

class Link extends Model
{

    protected $fillable = [
        'name',
        'description',
        'link',
        'qrCode'      
    ];


    // Function to generate qr code
    public static function generateQrCode($link) {

        $qrCode = 'qr-codes/'.time().'qrcode.png';
        $code = QrCode::size(50000)
        ->backgroundColor(239,243,198)
        ->format('png')
        ->generate($link, public_path($qrCode));

        return ([
            'code' => $code,
            'qrCode' => $qrCode
        ]);
    }
}
