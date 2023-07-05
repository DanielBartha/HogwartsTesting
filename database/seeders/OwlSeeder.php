<?php

namespace Database\Seeders;

use App\Models\Owl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owl::factory()->create(['name' => 'Defence Against the Dark Arts']);
        Owl::factory()->create(['name' => 'Care of Magical Creatures']);
        Owl::factory()->create(['name' => 'Charms']);
        Owl::factory()->create(['name' => 'Herbology']);
        Owl::factory()->create(['name' => 'Potions']);
        Owl::factory()->create(['name' => 'Transfiguration']);
        Owl::factory()->create(['name' => 'Astronomy']);
        Owl::factory()->create(['name' => 'Divination']);
        Owl::factory()->create(['name' => 'History of Magic']);
    }
}
