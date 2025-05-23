<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\ProgramSeeder;
use Database\Seeders\UpdatesImageSeeder;
use Database\Seeders\AudioSeeder;
use Database\Seeders\LegalOpinionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(MunicipalitySeeder::class);
        //$this->call(ProgramSeeder::class);
        $this->call(HomeImageSliderSeeder::class);
        //$this->call(RolesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UpdatesImageSeeder::class);
        $this->call(PdfCitCharterSeeder::class);
        $this->call(AudioSeeder::class);
        $this->call(LegalOpinionsSeeder::class);
    }
}
