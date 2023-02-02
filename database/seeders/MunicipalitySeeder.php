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
                ],
                [
                    'id' => 2,
                    'municipality' => 'ALICIA',
                ],
                [
                    'id' => 3,
                    'municipality' => 'ANDA',
                ],
                [
                    'id' => 4,
                    'municipality' => 'ANTEQUERA',
                ],
                [
                    'id' => 5,
                    'municipality' => 'BACLAYON',
                ],
                [
                    'id' => 6,
                    'municipality' => 'BALILIHAN',
                ],
                [
                    'id' => 7,
                    'municipality' => 'BATUAN',
                ],
                [
                    'id' => 8,
                    'municipality' => 'BIEN UNIDO',
                ],
                [
                    'id' => 9,
                    'municipality' => 'BILAR',
                ],
                [
                    'id' => 10,
                    'municipality' => 'BUENAVISTA',
                ],
                [
                    'id' => 11,
                    'municipality' => 'CALAPE',
                ],
                [
                    'id' => 12,
                    'municipality' => 'CANDIJAY',
                ],
                [
                    'id' => 13,
                    'municipality' => 'CARMEN',
                ],
                [
                    'id' => 14,
                    'municipality' => 'CATIGBIAN',
                ],
                 [
                    'id' => 15,
                    'municipality' => 'CLARIN',
                ], [
                    'id' => 16,
                    'municipality' => 'CORELLA',
                ],
                [
                    'id' => 17,
                    'municipality' => 'CORTES',
                ],
                [
                    'id' => 18,
                    'municipality' => 'DAGOHOY',
                ],
                [
                    'id' => 19,
                    'municipality' => 'DANAO',
                ],
                [
                    'id' => 20,
                    'municipality' => 'DAUIS',
                ],
                [
                    'id' => 21,
                    'municipality' => 'DIMIAO',
                ],
                [
                    'id' => 22,
                    'municipality' => 'DUERO',
                ],
                [
                    'id' => 23,
                    'municipality' => 'GARCIA HERNANDEZ',
                ],
                [
                    'id' => 24,
                    'municipality' => 'GETAFE',
                ],
                [
                    'id' => 25,
                    'municipality' => 'GUINDULMAN',
                ],
                [
                    'id' => 26,
                    'municipality' => 'INABANGA',
                ],
                 [
                    'id' => 27,
                    'municipality' => 'JAGNA',
                ], [
                    'id' => 28,
                    'municipality' => 'LILA',
                ],
                [
                    'id' => 29,
                    'municipality' => 'LOAY',
                ],
                [
                    'id' => 30,
                    'municipality' => 'LOBOC',
                ],
                [
                    'id' => 31,
                    'municipality' => 'LOON',
                ],
                [
                    'id' => 32,
                    'municipality' => 'MABINI',
                ],
                [
                    'id' => 33,
                    'municipality' => 'MARIBOJOC',
                ],
                [
                    'id' => 34,
                    'municipality' => 'PANGLAO',
                ],
                 [

                    'id' => 35,
                    'municipality' => 'PILAR',
                ], [
                    'id' => 36,
                    'municipality' => 'PRES. C. P. GARCIA',
                ],
                [
                    'id' => 37,
                    'municipality' => 'SAGBAYAN',
                ],

                [
                    'id' => 38,
                    'municipality' => 'SAN ISIDRO',
                ],
                [
                    'id' => 39,
                    'municipality' => 'SAN MIGUEL',
                ],
                [
                    'id' => 40,
                    'municipality' => 'SEVILLA',
                ],
                [
                    'id' => 41,
                    'municipality' => 'SIERRA BULLONES',
                ],
                [
                    'id' => 42,
                    'municipality' => 'SIKATUNA',
                ],
                [
                    'id' => 43,
                    'municipality' => 'TAGBILARAN CITY',
                ],
                [
                    'id' => 44,
                    'municipality' => 'TALIBON',
                ],
                [
                    'id' => 45,
                    'municipality' => 'TRINIDAD',
                ],
                [
                    'id' => 46,
                    'municipality' => 'TUBIGON',
                ],
                [
                    'id' => 47,
                    'municipality' => 'UBAY',
                ],
                [
                    'id' => 48,
                    'municipality' => 'VALENCIA',
                ],
            ];
            Municipality::insert($data);
        }
    }