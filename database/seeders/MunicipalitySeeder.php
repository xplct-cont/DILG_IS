<?php

namespace Database\Seeders;
use App\Models\Municipality;

use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
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
                    'municipality' => 'ALBURQUERQUE',
                    'gmap_url' => 'https://maps.google.com/maps?q=alburquerque, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '11',
                    'barangays' => json_encode(array('Bahi', 'Basacdacu', 'Cantiguib', 'Dangay', 'East Poblacion', 'Ponong', 'San Agustin', 'Santa Filomen', 'Tagbuane', 'Toril', 'West Poblacion')),
                ],
              
            ];

            Municipality::insert($data);
        }
    }
