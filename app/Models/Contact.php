<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    private static $detailContact = [
        "phone" => "+6287881810411",
        "whatsapp" => "+6287881810411",
        "email" => "irfanraizel@gmail.com",
        "instagram" => "@irfanrz2",
        "address" => "Sepang Mountain Residence Blok K2/14, Kota Serang, Banten"
    ];

    public static function getContact() {
        return collect(self::$detailContact);
    }
}
