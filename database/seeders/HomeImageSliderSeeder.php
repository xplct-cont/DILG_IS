<?php

namespace Database\Seeders;
use App\Models\Home_Image;

use Illuminate\Database\Seeder;

class HomeImageSliderSeeder extends Seeder
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
    
            Home_Image::insert($data);
        }
    }