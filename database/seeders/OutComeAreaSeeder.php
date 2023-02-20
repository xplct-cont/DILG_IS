<?php

namespace Database\Seeders;

use App\Models\OutComeArea;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OutComeAreaSeeder extends Seeder
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
                'title' => 'ACCOUNTABLE, TRANSPARENT, PARTICIPATIVE, AND EFFECTIVE LOCAL GOVERNANCE',
            ],
            [
                'id' => 2,
                'title' => 'PEACEFUL, ORDERLY AND SAFE LGUS STRATEGIC PRIORITIES',
            ],
            [
                'id' => 3,
                'title' => 'SOCIALLY PROTECTIVE LGUS',
            ],
            [
                'id' => 4,
                'title' => 'ENVIRONMENT-PROTECTIVE, CLIMATE CHANGE ADAPTIVE AND DISASTER RESILIENT LGUS',
            ],
            [
                'id' => 5,
                'title' => ' BUSINESS-FRIENDLY AND COMPETITIVE LGUS',
            ],
            [
                'id' => 6,
                'title' => 'STRENGTHENING OF INTERNAL GOVERNANCE',
            ],
           
        ];
        OutComeArea::insert($data);
    }
}
