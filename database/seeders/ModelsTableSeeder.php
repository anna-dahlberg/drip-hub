<?php

namespace Database\Seeders;

use App\Models\ModelRing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelRing::truncate();

        // Seed the metals
        $names = ['Amelia', 'Maria', 'Jasmine', 'Jean', 'Charles', 'Alexander'];

        foreach ($names as $name) {
            ModelRing::factory()->create([
                'type' => $name,
            ]);
        }
    }
}
