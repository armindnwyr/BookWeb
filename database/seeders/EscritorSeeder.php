<?php

namespace Database\Seeders;

use App\Models\escritor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscritorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        escritor::factory()->count(20)->create();
    }
}
