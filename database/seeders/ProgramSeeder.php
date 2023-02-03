<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeeder extends Seeder
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
                'title' => 'ADM',
            ],
            [
                'id' => 2,
                'title' => 'AM',
            ],
            [
                'id' => 3,
                'title' => 'BEA',
            ],
            [
                'id' => 4,
                'title' => 'BUB',
            ],
            [
                'id' => 5,
                'title' => 'CMGP',
            ],
            [
                'id' => 6,
                'title' => 'DRRAP',
            ],
            [
                'id' => 7,
                'title' => 'FALGU',
            ],
            [
                'id' => 8,
                'title' => 'KALSADA',
            ],
            [
                'id' => 9,
                'title' => 'PAMANA',
            ],
            [
                'id' => 10,
                'title' => 'RAY 1',
            ],
            [
                'id' => 11,
                'title' => 'RAY 2',
            ],
            [
                'id' => 12,
                'title' => 'RAY 3',
            ],
            [
                'id' => 13,
                'title' => 'SALINTUBIG',
            ],
            [
                'id' => 14,
                'title' => 'SLRF',
            ],
        ];
        Program::insert($data);
    }
}
