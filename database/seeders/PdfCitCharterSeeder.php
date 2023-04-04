<?php

namespace Database\Seeders;
use App\Models\Pdf_Upload_Cit_Charter;

use Illuminate\Database\Seeder;

class PdfCitCharterSeeder extends Seeder
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
                    'file' => 'Citizens Charter.pdf',
                ],

            ];
    
            Pdf_Upload_Cit_Charter::insert($data);
        }
    }