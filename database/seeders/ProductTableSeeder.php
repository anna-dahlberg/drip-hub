<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->delete();
        Product::factory()->create([
            'article_number' => 12345678,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 16,
            'price' => 9600,
            'stock' => 100,
        ]);
        Product::factory()->create([
            'article_number' => 87654321,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 17,
            'price' => 7600,
            'stock' => 90,
        ]);
    }
}
