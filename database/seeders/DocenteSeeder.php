<?php

namespace Database\Seeders;

use App\Models\docente;
use Database\Factories\DocenteFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        docente::factory()->count(20)->create();
    }
}
