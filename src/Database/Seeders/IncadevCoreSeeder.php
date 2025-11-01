<?php

namespace Incadev\Core\Database\Seeders;

use Illuminate\Database\Seeder;

class IncadevCoreSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            MainSeeder::class,
        ]);
    }
}
