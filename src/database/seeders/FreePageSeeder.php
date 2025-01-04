<?php

namespace Database\Seeders;

use App\Models\FreePages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FreePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        FreePages::factory()->count(5)->create();
    }
}
