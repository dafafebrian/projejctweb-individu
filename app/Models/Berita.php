<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Berita satu",
            "slug" => "berita-satu",
            "penulis" => "Nadhif Basmalah",
            "konten" => "Bergema sampai selamanya"
        ],
        [
            "judul" => "Berita dua",
            "slug" => "berita-dua",
            "penulis" => ".Feast",
            "konten" => "Tarot"
        ],
        [
            "judul" => "Berita tiga",
            "slug" => "berita-tiga",
            "penulis" => "Season",
            "konten" => "Wave to Earth"
        ]
        ];

    public static function ambildata() 
    {
        return Self::$data_berita;
    }

    public static function caridata($slug)
    {
        $data_berita = Self:: $data_berita;

         $new_berita = [];
        foreach($data_berita as $berita) 
        {
            if($berita["slug"] === $slug) {
                $new_berita = $berita;
            }
        }

    return $new_berita;
    }
}