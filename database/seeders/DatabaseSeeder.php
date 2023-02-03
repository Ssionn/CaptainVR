<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Coach;
use App\Models\Package;
use App\Models\Academic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Coach::factory()->count(14)->create([
            'profession' => 'Coach',
        ]);

        Academic::factory()->count(6)->create();

        Package::factory()->count(3)->create([
            'academic_id' => 2,
        ]);
    }
}
