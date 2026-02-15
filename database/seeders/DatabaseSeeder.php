<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // BARIS INI WAJIB ADA agar FruitSeeder dijalankan
        $this->call([
            FruitSeeder::class,
        ]);
    }
}