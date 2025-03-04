<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing entries
        Material::truncate();

        // Seed the metals
        $metals = ['gold', 'silver', 'rose gold'];

        foreach ($metals as $metal) {
            Material::factory()->create([
                'material' => $metal,
            ]);
        }
    }
}
