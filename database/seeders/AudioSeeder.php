<?php

namespace Database\Seeders;
use App\Models\Audio;

use Illuminate\Database\Seeder;

class AudioSeeder extends Seeder
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
                    'file' => 'DILG-BOHOL LGOO Hymn.mp3',
                ],

            ];
    
            Audio::insert($data);
        }
    }