<?php

namespace Database\Seeders;

use App\Models\RingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing entries
        RingType::query()->delete();

        // Seed the metals
        $types = ['band ring', 'solitaire ring', 'halo ring', 'three-stone ring', 'eternity ring', 'signet ring'];

        foreach ($types as $type) {
            RingType::factory()->create([
                'type' => $type,
            ]);
        }
    }
}
