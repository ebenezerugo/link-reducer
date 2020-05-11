<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use QrCode;

class Link extends Model
{
    // Function to generate qr code
    public static function generateQrCode($link) {

        $path = 'qr-codes/'.time().'qrcode.png';
        QrCode::size(500)
        ->format('png')
        ->generate($link, public_path($path));

        return $path;
    }
}
