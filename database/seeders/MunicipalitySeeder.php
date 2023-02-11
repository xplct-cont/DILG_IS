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
                    'barangays' => json_encode(array('Cabatang','Cagongcagong','Cambaol', 'Cayacay', 'Del Monte', 'Katipunan', 'La Hacienda', 'Mahayag', 'Napo', 'Pagahat', 'Poblacion (Calingganay)','Progreso', 'Putlongcam', 'Sudlon (Omhor)', 'Untaga')),
                ],
                [
                    'id' => 3,
                    'municipality' => 'ANDA',
                    'gmap_url' => 'https://maps.google.com/maps?q=anda, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '16',
                    'barangays' =>  json_encode(array('Almaria', 'Bacong', 'Badiang', 'Buenasuerte', 'Candabong', 'Casica', 'Katipunan', 'Linawan', 'Lundag', 'Poblacion', 'Santa Cruz', 'Suba', 'Talisay', 'Tanod', 'Tawid', 'Virgen')),
                ],
                [
                    'id' => 4,
                    'municipality' => 'ANTEQUERA',
                    'gmap_url' => 'https://maps.google.com/maps?q=antequera, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '21',
                    'barangays' =>  json_encode(array('Angilan', 'Bantolinao', 'Bicahan', 'Bitaugan', 'Bungahan', 'Canlaas', 'Cansibuan', 'Can-omay', 'Celing', 'Danao', 'Danicop', 'Mag-aso', 'Poblacion', 'Quinapon-an', 'Santo Rosario', 'Tabuan', 'Tagubaas', 'Tupas', 'Obujan', 'Viga', 'Villa Aurora (Canoc-oc)')),
                ],
                [
                    'id' => 5,
                    'municipality' => 'BACLAYON',
                    'gmap_url' => 'https://maps.google.com/maps?q=baclayon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '17',
                    'barangays' =>  json_encode(array('Cambanac', 'Dasitam', 'San Juan', 'Guiwanon', 'Landican', 'Laya', 'Libertad', 'Montana', 'Pamilacan', 'Payahan', 'Poblacion', 'San Isidro', 'San Roque', 'San Vicente', 'Santa Cruz', 'Taguihon', 'Tanday')),
                ],
                [
                    'id' => 6,
                    'municipality' => 'BALILIHAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=balilihan, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '31',
                    'barangays' =>  json_encode(array('Baucan Norte', 'Baucan Sur', 'Boctol', 'Boyog Norte', 'Boyog Proper', 'Boyog Sur', 'Cabad', 'Candasig', 'Cantalid', 'Cantomimbo', 'Cogon', 'Datag Norte', 'Datag Sur', 'Del Carmen Este (Pob.)', 'Del Carmen Norte (Pob.)', 'Del Carmen Weste (Pob.)', 'Del Carmen Sur (Pob.)', 'Del Rosario', 'Dorol', 'Hanguilanan Grande', 'Hanopol Este', 'Hanopol Norte', 'Hanopol Weste', 'Magsija', 'Maslog', 'Sagasa', 'Sal-ing', 'San Isidro', 'San Roque', 'Santo Niño', 'Tagustusan')),
                ],
                [
                    'id' => 7,
                    'municipality' => 'BATUAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=batuan, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '15',
                    'barangays' =>  json_encode(array('Aloja', 'Cabacnitan', 'Cambacay', 'Cantigdas', 'Garcia', 'Janlud', 'Poblacion Norte', 'Poblacion Sur', 'Poblacion Vieja (Longsudaan)', 'Quezon', 'Quirino', 'Rizal', 'Rosariohan', 'Behind the Clouds (San Jose)', 'Santa Cruz' )),
                ],
                [
                    'id' => 8,
                    'municipality' => 'BIEN UNIDO',
                    'gmap_url' => 'https://maps.google.com/maps?q=bien unido, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '15',
                    'barangays' => json_encode(array('Bilangbilangan Daku', 'Bilangbilangan East', 'Hingootanan East', 'Hingotanan West', 'Liberty', 'Malingin', 'Mandawa', 'Maomawan', 'Nueva Esparanza', 'Nueva Estrella', 'Pinamgo', 'Poblacion (Bien Unido)', 'Puerto San Pedro', 'Sagasa', 'Tuboran')),
                ],
                [
                    'id' => 9,
                    'municipality' => 'BILAR',
                    'gmap_url' => 'https://maps.google.com/maps?q=bilar, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '19',
                    'barangays' => json_encode(array('Bonifacio', 'Bugang Norte', 'Bugang Sur', 'Cabacnitan (Magsaysay)', 'Cambigsi', 'Campagao', 'Cansumbol', 'Dagohoy', 'Owac', 'Poblacion', 'Quezon', 'Riverside', 'Rizal', 'Roxas', 'Subayon', 'Villa Aurora', 'Villa Suerte', 'Yanaya', 'Zamora')),
                ],
                [
                    'id' => 10,
                    'municipality' => 'BUENAVISTA',
                    'gmap_url' => 'https://maps.google.com/maps?q=buenavista, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '35',
                    'barangays' => json_encode(array('Anonang', 'Asinan', 'Bago', 'Baluarte', 'Bantuan', 'Bato', 'Bonotbonot', 'Bugaong', 'Cambuhat', 'Cambus-oc', 'Cangawa', 'Cantomugcad', 'Cantores', 'Cantuba', 'Catigbian', 'Cawag', 'Cruz', 'Dait', 'Eastern Cabul-an', 'Hunan', 'Lapacan ', 'Lapacan Norte', 'Lapacan Sur', 'Lubang', 'Lusong (Plateau)', 'Magkaya', 'Merryland', 'Nueva Granada', 'Nueva Montana', 'Overland', 'Panghagban', 'Poblacion', 'Puting Bato', 'Rufo Hill', 'Sweetland', 'Western Cabul-an')),
                ],
                [
                    'id' => 11,
                    'municipality' => 'CALAPE',
                    'gmap_url' => 'https://maps.google.com/maps?q=calape, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '33',
                    'barangays' => json_encode(array('Abucayan Norte', 'Abucayan Sur', 'Banlasan', 'Bentig', 'Binogawan', 'Bonbon', 'Cabayugan', 'Cabudburan', 'Calunasan', 'Camias', 'Canguha', 'Catmonan', 'Desamprados (Pob.)', 'Kahayag', 'Kinabag-an', 'Labuon', 'Lawis', 'Liboron', 'Lo-oc', 'Lomboy', 'Lucob', 'Madangog', 'Magtongtong', 'Mandaug', 'Mantatao', 'Sampoangon', 'San Isidro', 'Santa Cruz (Pob.)', 'Sojoton', 'Talisay', 'Tinibgan', 'Tultugan', 'Ulbujan')),
                ],
                [
                    'id' => 12,
                    'municipality' => 'CANDIJAY',
                    'gmap_url' => 'https://maps.google.com/maps?q=candijay, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '21',
                    'barangays' => json_encode(array('Abihilan', 'Anoling', 'Boyo-an', 'Cadapdapan', 'Cambane', 'Can-olin', 'Canawa', 'Cogtong', 'La Union', 'Luan', 'Lungsoda-an', 'Mahangin', 'Pagahat', 'Panadtaran', 'Panas', 'Poblacion', 'San Isidro', 'Tambongan', 'Tawid', 'Tugas', 'Tubod (Tres Rosas)')),
                ],
                [
                    'id' => 13,
                    'municipality' => 'CARMEN',
                    'gmap_url' => 'https://maps.google.com/maps?q=carmen, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '29',
                    'barangays' => json_encode(array('Alegria', 'Bicao', 'Buenavista', 'Buenos Aires', 'Calatrava' , 'El Progreso', 'El Salvador', 'Guadalupe', 'Katipunan', 'La Libertad', 'La Paz', 'La Salvacion', 'La Victoria', 'Matin-ao', 'Montehermoso', 'Montesuerte', 'Montesunting', 'Montevideo', 'Nueva Fuerza', 'Nueva Vida Este', 'Nueva Vida Sur', 'Nueva Vida Norte', 'Poblacion Norte', 'Poblacion Sur', 'Tambo-an', 'Vallehermoso', 'Villaflor', 'Villafuerte', 'Villarcayo')),
                ],
                [
                    'id' => 14,
                    'municipality' => 'CATIGBIAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=catigbian, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '22',
                    'barangays' => json_encode(array('Alegria', 'Ambuan', 'Baang', 'Bagtic', 'Bongbong', 'Cambailan', 'Candumayao', 'Kang-iras', 'Causwagan Norte', 'Hagbuaya', 'Haguilanan', 'Libertad Sur', 'Liboron', 'Mahayag Norte', 'Mahayag Sur', 'Maitum', 'Mantasida', 'Poblacion', 'Rizal', 'Sinakayanan', 'Triple Union', 'Poblacion Weste')),
                ],
                [
                    'id' => 15,
                    'municipality' => 'CLARIN',
                    'gmap_url' => 'https://maps.google.com/maps?q=clarin, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '24',
                    'barangays' => json_encode(array('Bacani', 'Bogtongbod', 'Bonbon', 'Bontud', 'Buacao', 'Buangan', 'Cabog', 'Caluwasan', 'Candajec', 'Cantoyoc', 'Comaang', 'Danahao', 'Katipunan', 'Lajog', 'Mataub', 'Nahawan', 'Poblacion Centro', 'Poblacion Norte', 'Poblacion Sur', 'Tangaran', 'Tontunan', 'Tubod', 'Villaflor')),
                ],
                [
                    'id' => 16,
                    'municipality' => 'CORELLA',
                    'gmap_url' => 'https://maps.google.com/maps?q=corella, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '8',
                    'barangays' => json_encode(array('Anislag', 'Canangca-an', 'Canapnapan', 'Cancatac', 'Pandol', 'Poblacion', 'Sambog', 'Tanday')),
                ],
                [
                    'id' => 17,
                    'municipality' => 'CORTES',
                    'gmap_url' => 'https://maps.google.com/maps?q=cortes, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '14',
                    'barangays' => json_encode(array('De la Paz', 'Fatima', 'Loreto', 'Lourdes', 'Malayo Norte', 'Malayo Sur', 'Monserrat', 'New Lourdes', 'Patrocinio', 'Poblacion', 'Rosario', 'Salvador', 'San Roque', 'Upper de la Paz')),
                ],
                [
                    'id' => 18,
                    'municipality' => 'DAGOHOY',
                    'gmap_url' => 'https://maps.google.com/maps?q=dagohoy, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '15',
                    'barangays' => json_encode(array('Babag', 'Can-oling', 'Candelaria', 'Estaca', 'Cagawasan', 'Cagawitan', 'Caluasan', 'La Esperanza', 'Mahayag', 'Malitbog', 'Poblacion', 'San Miguel', 'San Vicente', 'Santa Cruz', 'Villa Aurora')),
                ],
                [
                    'id' => 19,
                    'municipality' => 'DANAO',
                    'gmap_url' => 'https://maps.google.com/maps?q=danao, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '17',
                    'barangays' => json_encode(array('Cabatuan', 'Cantubod', 'Carbon', 'Concepcion', 'Dagohoy', 'Hibale', 'Magtangtang', 'Nahud', 'Poblacion', 'Remedios', 'San Carlos', 'San Miguel', 'Santa Fe', 'Santo Niño', 'Tabok', 'Taming', 'Villa Anunciado')),
                ],
                [
                    'id' => 20,
                    'municipality' => 'DAUIS',
                    'gmap_url' => 'https://maps.google.com/maps?q=dauis, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '12',
                    'barangays' => json_encode(array('Biking', 'Bingag', 'San Isidro (Canlongon)', 'Catarman', 'Dao', 'Mayacabac', 'Poblacion', 'Songculan', 'Tabalong', 'Tinago', 'Totolan', 'Mariveles')),
                ],
                [
                    'id' => 21,
                    'municipality' => 'DIMIAO',
                    'gmap_url' => 'https://maps.google.com/maps?q=dimiao, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '35',
                    'barangays' => json_encode(array('Abihid', 'Alemania', 'Baguhan', 'Bakilid', 'Balbalan', 'Banban', 'Bauhugan', 'Bilisan', 'Cabagakian', 'Cabanbanan', 'Cadap-agan', 'Cambacol', 'Cambayaon', 'Canhayupon', 'Canlambong', 'Casingan', 'Catugasan', 'Datag', 'Guindaguitan', 'Guingoyuran', 'Ile', 'Lapsaon', 'Limocon Ilaud', 'Limocon Ilaya', 'Luyo', 'Malijao', 'Oac', 'Pagsa', 'Pangihawan', 'Sawang', 'Puangyuta', 'Tangohay', 'Taongon Cabatuan', 'Tawid Bitaog', 'Taongon Can-andam')),
                ],
                [
                    'id' => 22,
                    'municipality' => 'DUERO',
                    'gmap_url' => 'https://maps.google.com/maps?q=duero, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '21',
                    'barangays' => json_encode(array('Alejawan', 'Angilan', 'Anibongan', 'Bangwalog', 'Cansuhay', 'Danao', 'Duay', 'Guinsularan', 'Itum', 'Langkis', 'Lobogon', 'Madua Norte', 'Madua Sur', 'Mambool', 'Mawi', 'Payao', 'San Antonio (Pob.)', 'San Isidro', 'San Pedro', 'Imelda', 'Taytay')),
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
                    'num_of_brgys' => '30',
                    'barangays' => json_encode(array('Abijilan', 'Antipolo', 'Basiao', 'Cagwang', 'Calma', 'Cambuyao', 'Canayaon East', 'Canayaon West', 'Candanas', 'Candulao', 'Catmon', 'Cayam', 'Cupa', 'Datag', 'Estaca', 'Libertad', 'Lungsodaan East', 'Lungsodaan West', 'Malinao', 'Manaba', 'Pasong', 'Poblacion East', 'Poblacion West', 'Sacaon', 'Sampong', 'Tabuan', 'Togbongon', 'Ulbujan East', 'Ulbujan West', 'Victoria')),
                ],
                [
                    'id' => 25,
                    'municipality' => 'GUINDULMAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=guindulman, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 26,
                    'municipality' => 'INABANGA',
                    'gmap_url' => 'https://maps.google.com/maps?q=inabanga, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 27,
                    'municipality' => 'JAGNA',
                    'gmap_url' => 'https://maps.google.com/maps?q=jagna, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 28,
                    'municipality' => 'LILA',
                    'gmap_url' => 'https://maps.google.com/maps?q=lila, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 29,
                    'municipality' => 'LOAY',
                    'gmap_url' => 'https://maps.google.com/maps?q=loay, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 30,
                    'municipality' => 'LOBOC',
                    'gmap_url' => 'https://maps.google.com/maps?q=loboc, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 31,
                    'municipality' => 'LOON',
                    'gmap_url' => 'https://maps.google.com/maps?q=loon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 32,
                    'municipality' => 'MABINI',
                    'gmap_url' => 'https://maps.google.com/maps?q=mabini, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 33,
                    'municipality' => 'MARIBOJOC',
                    'gmap_url' =>'https://maps.google.com/maps?q=maribojoc, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 34,
                    'municipality' => 'PANGLAO',
                    'gmap_url' => 'https://maps.google.com/maps?q=panglao, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                 [

                    'id' => 35,
                    'municipality' => 'PILAR',
                    'gmap_url' => 'https://maps.google.com/maps?q=pilar, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 36,
                    'municipality' => 'PRES. C. P. GARCIA',
                    'gmap_url' => 'https://maps.google.com/maps?q=pres c p garcia, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 37,
                    'municipality' => 'SAGBAYAN',
                    'gmap_url' => 'https://maps.google.com/maps?q=sagbayan, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],

                [
                    'id' => 38,
                    'municipality' => 'SAN ISIDRO',
                    'gmap_url' => 'https://maps.google.com/maps?q=san isidro, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 39,
                    'municipality' => 'SAN MIGUEL',
                    'gmap_url' =>'https://maps.google.com/maps?q=san miguel , bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 40,
                    'municipality' => 'SEVILLA',
                    'gmap_url' => 'https://maps.google.com/maps?q=sevilla, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 41,
                    'municipality' => 'SIERRA BULLONES',
                    'gmap_url' => 'https://maps.google.com/maps?q=sierra bullones, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 42,
                    'municipality' => 'SIKATUNA',
                    'gmap_url' => 'https://maps.google.com/maps?q=sikatuna, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 43,
                    'municipality' => 'TAGBILARAN CITY',
                    'gmap_url' => 'https://maps.google.com/maps?q=tagbilaran city, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 44,
                    'municipality' => 'TALIBON',
                    'gmap_url' => 'https://maps.google.com/maps?q=talibon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 45,
                    'municipality' => 'TRINIDAD',
                    'gmap_url' => 'https://maps.google.com/maps?q=trinidad, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 46,
                    'municipality' => 'TUBIGON',
                    'gmap_url' => 'https://maps.google.com/maps?q=tubigon, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 47,
                    'municipality' => 'UBAY',
                    'gmap_url' => 'https://maps.google.com/maps?q=ubay, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
                [
                    'id' => 48,
                    'municipality' => 'VALENCIA',
                    'gmap_url' => 'https://maps.google.com/maps?q=valencia, bohol&t=&z=12&ie=UTF8&iwloc=&output=embed',
                    'num_of_brgys' => '0',
                    'barangays' => json_encode(array('dummy1', 'dummy2')),
                ],
            ];
    
            Municipality::insert($data);
        }
    }