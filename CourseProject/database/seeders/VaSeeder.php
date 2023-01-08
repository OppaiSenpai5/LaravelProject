<?php

namespace Database\Seeders;

use App\Models\Va;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Va::create([
            'id' => 1,
            'name' => 'Ryota Osaka',
            'about' => '<p><strong>Birth place:</strong> Tokushima Prefecture, Japan</p><p><strong>Height:</strong> 176 cm</p><p><strong>Blood type:</strong> O</p><p><strong>Hobbies &amp; skills:</strong> softball, bowling, walking, games</p><p><br></p><p>Announced marriage with fellow Seiyuu Manami Numakura on October 23, 2019.</p>',
            'image' => '/storage/9b63b553141c8e0ec368aff4f12c0b422534e0f5.png'
        ]);

        Va::create([
            'id' => 2,
            'name' => 'Yoko Hikasa',
            'about' => '<p><strong>Hometown:</strong> Kanagawa, Japan</p><p><strong>Blood type:</strong> O</p><p><strong>Height:</strong> 157 cm</p><p><strong>Sports and Hobbies:</strong> fashion, basketball, softball</p><p><br></p><p>Co-hosts the popular weekly radio show Odoroki Sentai Momonoki Five (おどろき戦隊モモノキファイブ) with Nakamura Eriko.</p><p><br></p><p>Married in 2015.</p>',
            'image' => '/storage/506f47f3f0864bbb66ab4117afb49e7695531b6e.png'
        ]);

        Va::create([
            'id' => 3,
            'name' => 'Mamoru Miyano',
            'about' => '<p><strong>Hometown:</strong> Saitama, Japan</p><p><strong>Height:</strong> 182 cm</p><p><strong>Weight:</strong> 70 kg</p><p><strong>Blood type:</strong> B</p><p><strong>Hobbies:</strong> singing, soccer</p><p><strong>Skills:</strong> harmonica, harp</p><p><br></p><p>Mamoru Miyano won Best Voice Actor award in the Second Seiyuu Awards for leading roles of Kida Masaomi (Durarara!!), Setsuna F Seiei (Mobile Suit Gundam 00) and Hakugen Rikuson (Koutetsu Sangokushi). He married in late 2008; 2-3 months after his announcement, their son was born.</p>',
            'image' => '/storage/b0e99ae27fe5e949b8e77d3117bb96c5e133a48a.png'
        ]);

        Va::create([
            'id' => 4,
            'name' => 'Nao Touyama',
            'about' => '<p><strong>Blood type:</strong> A</p><p><strong>Birth place:</strong> Tokyo, Japan</p><p><strong>Height:</strong> 152 cm</p><p><strong>Hobbies:</strong> singing, dancing, electronic organ</p><p><strong>Nicknames:</strong> Nao-bou, To-ya man</p>',
            'image' => '/storage/8007f527f11bc5b2e4958e832592af564f38ad2d.png'
        ]);
    }
}
