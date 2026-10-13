<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
    [
        "JUDUL" => "Mahasiswa TI",
        "slug" => "mahasiswa-ti",
        "PENULIS" => "Admin",
        "KONTEN" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem totam fuga sed, quia sit eum numquam est excepturi laboriosam exercitationem repudiandae alias quod labore corporis distinctio magnam quis quaerat. Magni maxime rem delectus? Ducimus laborum expedita blanditiis dolor ratione nobis rerum odio minima ullam quam cupiditate obcaecati veritatis, corrupti excepturi vel earum molestias corporis doloribus reiciendis repudiandae sequi eaque fugit? Facilis totam perferendis deserunt, quasi laboriosam beatae culpa sequi earum sunt asperiores magni eos provident voluptatibus quos! Maiores quis corporis vero, natus, eveniet voluptatibus suscipit minus quasi, asperiores dolores praesentium dignissimos quod ratione hic mollitia odio nulla animi molestias? Suscipit."
    ],
    [
        "JUDUL" => "Dosen TI",
        "slug" => "dosen-ti",
        "PENULIS" => "Pirman",
        "KONTEN" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, molestias error. Sapiente placeat distinctio officiis, doloribus nihil quibusdam velit voluptatibus exercitationem asperiores ipsa possimus doloremque animi libero ipsum amet, a repudiandae in eaque rerum atque consectetur? Maiores voluptatibus pariatur facilis rem quibusdam alias, expedita vel corporis eum temporibus odio quae aperiam explicabo voluptates eveniet consectetur blanditiis. Tenetur vero deserunt delectus eaque necessitatibus inventore saepe eligendi, corrupti repellat fugiat ipsum, rem quasi esse excepturi nulla veritatis? Aperiam, impedit dolore dignissimos repellendus expedita non voluptatum rerum porro temporibus debitis eos voluptatibus ea maiores laudantium beatae commodi alias amet labore quidem praesentium deserunt."
    ]
];

    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
        $beritas = self::$data_berita;

        $berita =[];
        foreach($beritas as $b)
            {
                if($b["slug"] === $slug)
                    {
                        $berita = $b;
                    }
            }
            return $berita;
    }

    public static function getTitle($slug)
    {
        $berita = self::getBerita($slug);
        return $berita["JUDUL"];
    }
}
