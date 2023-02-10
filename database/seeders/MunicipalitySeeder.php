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
                [
                
                    'id' => 2,
                    'municipality' => 'ALICIA',
                    'gmap_url' => 'https://maps.google.com/maps?q=alicia, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '15',
                    'barangays' => json_encode(array('')),
                ],
                [
                    'id' => 3,
                    'municipality' => 'ANDA',
                    'gmap_url' => 'https://maps.google.com/maps?q=anda, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 4,
                    'municipality' => 'ANTEQUERA',
                    'gmap_url' => 'https://maps.google.com/maps?q=antequera, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 5,
                    'municipality' => 'BACLAYON',
                    'gmap_url' => 'https://maps.google.com/maps?q=baclayon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 6,
                    'municipality' => 'BALILIHAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=balilihan, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 7,
                    'municipality' => 'BATUAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=batuan, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 8,
                    'municipality' => 'BIEN UNIDO',
                    'gmap_url' => 'https://maps.google.com/maps?q=bien unido, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 9,
                    'municipality' => 'BILAR',
                    'gmap_url' => 'https://maps.google.com/maps?q=bilar, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 10,
                    'municipality' => 'BUENAVISTA',
                    'gmap_url' => 'https://maps.google.com/maps?q=buenavista, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 11,
                    'municipality' => 'CALAPE',
                    'gmap_url' => 'https://maps.google.com/maps?q=calape, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 12,
                    'municipality' => 'CANDIJAY',
                    'gmap_url' => 'https://maps.google.com/maps?q=candijay, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 13,
                    'municipality' => 'CARMEN',
                    'gmap_url' => 'https://maps.google.com/maps?q=carmen, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 14,
                    'municipality' => 'CATIGBIAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=catigbian, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 15,
                    'municipality' => 'CLARIN',
                    'gmap_url' => 'https://maps.google.com/maps?q=clarin, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 16,
                    'municipality' => 'CORELLA',
                    'gmap_url' => 'https://maps.google.com/maps?q=corella, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 17,
                    'municipality' => 'CORTES',
                    'gmap_url' => 'https://maps.google.com/maps?q=cortes, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 18,
                    'municipality' => 'DAGOHOY',
                    'gmap_url' => 'https://maps.google.com/maps?q=dagohoy, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 19,
                    'municipality' => 'DANAO',
                    'gmap_url' => 'https://maps.google.com/maps?q=danao, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 20,
                    'municipality' => 'DAUIS',
                    'gmap_url' => 'https://maps.google.com/maps?q=dauis, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 21,
                    'municipality' => 'DIMIAO',
                    'gmap_url' => 'https://maps.google.com/maps?q=dimiao, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 22,
                    'municipality' => 'DUERO',
                    'gmap_url' => 'https://maps.google.com/maps?q=duero, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 23,
                    'municipality' => 'GARCIA HERNANDEZ',
                    'gmap_url' => 'https://maps.google.com/maps?q=garcia hernandez, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 24,
                    'municipality' => 'GETAFE',
                    'gmap_url' =>'https://maps.google.com/maps?q=getafe, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 25,
                    'municipality' => 'GUINDULMAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=guindulman, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 26,
                    'municipality' => 'INABANGA',
                    'gmap_url' => 'https://maps.google.com/maps?q=inabanga, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 27,
                    'municipality' => 'JAGNA',
                    'gmap_url' => 'https://maps.google.com/maps?q=jagna, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 28,
                    'municipality' => 'LILA',
                    'gmap_url' => 'https://maps.google.com/maps?q=lila, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 29,
                    'municipality' => 'LOAY',
                    'gmap_url' => 'https://maps.google.com/maps?q=loay, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 30,
                    'municipality' => 'LOBOC',
                    'gmap_url' => 'https://maps.google.com/maps?q=loboc, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 31,
                    'municipality' => 'LOON',
                    'gmap_url' => 'https://maps.google.com/maps?q=loon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 32,
                    'municipality' => 'MABINI',
                    'gmap_url' => 'https://maps.google.com/maps?q=mabini, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 33,
                    'municipality' => 'MARIBOJOC',
                    'gmap_url' =>'https://maps.google.com/maps?q=maribojoc, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 34,
                    'municipality' => 'PANGLAO',
                    'gmap_url' => 'https://maps.google.com/maps?q=panglao, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                 [

                    'id' => 35,
                    'municipality' => 'PILAR',
                    'gmap_url' => 'https://maps.google.com/maps?q=pilar, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 36,
                    'municipality' => 'PRES. C. P. GARCIA',
                    'gmap_url' => 'https://maps.google.com/maps?q=pres c p garcia, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 37,
                    'municipality' => 'SAGBAYAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=sagbayan, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],

                [
                    'id' => 38,
                    'municipality' => 'SAN ISIDRO',
                    'gmap_url' => 'https://maps.google.com/maps?q=san isidro, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 39,
                    'municipality' => 'SAN MIGUEL',
                    'gmap_url' =>'https://maps.google.com/maps?q=san miguel , bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 40,
                    'municipality' => 'SEVILLA',
                    'gmap_url' => 'https://maps.google.com/maps?q=sevilla, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 41,
                    'municipality' => 'SIERRA BULLONES',
                    'gmap_url' => 'https://maps.google.com/maps?q=sierra bullones, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 42,
                    'municipality' => 'SIKATUNA',
                    'gmap_url' => 'https://maps.google.com/maps?q=sikatuna, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 43,
                    'municipality' => 'TAGBILARAN CITY',
                    'gmap_url' => 'https://maps.google.com/maps?q=tagbilaran city, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 44,
                    'municipality' => 'TALIBON',
                    'gmap_url' => 'https://maps.google.com/maps?q=talibon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 45,
                    'municipality' => 'TRINIDAD',
                    'gmap_url' => 'https://maps.google.com/maps?q=trinidad, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 46,
                    'municipality' => 'TUBIGON',
                    'gmap_url' => 'https://maps.google.com/maps?q=tubigon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 47,
                    'municipality' => 'UBAY',
                    'gmap_url' => 'https://maps.google.com/maps?q=ubay, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
                [
                    'id' => 48,
                    'municipality' => 'VALENCIA',
                    'gmap_url' => 'https://maps.google.com/maps?q=valencia, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '',
                    'barangays' => '',
                ],
            ];
    
            Municipality::insert($data);
        }
    }