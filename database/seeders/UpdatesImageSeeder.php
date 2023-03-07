<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Updates_Image;

class UpdatesImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'images' => json_encode(array('img2.jpg', 'img4.jpg', 'img5.jpg')),
            ],

        ];

        Updates_Image::insert($data);
    }
}
