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
        /* Amelia guld */
        Product::query()->delete();
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 14,
            'price' => 9600,
            'stock' => 100,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 15,
            'price' => 9600,
            'stock' => 100,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 16,
            'price' => 9600,
            'stock' => 100,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 17,
            'price' => 9600,
            'stock' => 102,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 18,
            'price' => 9600,
            'stock' => 10,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 19,
            'price' => 9600,
            'stock' => 110,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 20,
            'price' => 9600,
            'stock' => 120,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 21,
            'price' => 9600,
            'stock' => 97,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 22,
            'price' => 9600,
            'stock' => 95,
        ]);
        Product::factory()->create([
            'article_number' => 48291763,
            'type_id' => 1,
            'material_id' => 1,
            'model_id' => 1,
            'size' => 23,
            'price' => 9600,
            'stock' => 78,
        ]);

        /* Maria silver */
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 14,
            'price' => 7600,
            'stock' => 90,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 15,
            'price' => 7600,
            'stock' => 95,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 16,
            'price' => 7600,
            'stock' => 120,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 17,
            'price' => 7600,
            'stock' => 190,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 18,
            'price' => 7600,
            'stock' => 93,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 19,
            'price' => 7600,
            'stock' => 45,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 20,
            'price' => 7600,
            'stock' => 25,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 21,
            'price' => 7600,
            'stock' => 4,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 22,
            'price' => 7600,
            'stock' => 43,
        ]);
        Product::factory()->create([
            'article_number' => 73910428,
            'type_id' => 2,
            'material_id' => 2,
            'model_id' => 2,
            'size' => 23,
            'price' => 7600,
            'stock' => 89,
        ]);

        /* Jasmine rose gold */
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 14,
            'price' => 7600,
            'stock' => 10,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 15,
            'price' => 7600,
            'stock' => 52,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 16,
            'price' => 7600,
            'stock' => 108,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 17,
            'price' => 7600,
            'stock' => 102,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 18,
            'price' => 7600,
            'stock' => 87,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 19,
            'price' => 7600,
            'stock' => 97,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 20,
            'price' => 7600,
            'stock' => 78,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 21,
            'price' => 7600,
            'stock' => 35,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 22,
            'price' => 7600,
            'stock' => 23,
        ]);
        Product::factory()->create([
            'article_number' => 56183297,
            'type_id' => 3,
            'material_id' => 3,
            'model_id' => 3,
            'size' => 23,
            'price' => 7600,
            'stock' => 55,
        ]);

        /* Jean silver */
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 14,
            'price' => 7400,
            'stock' => 46,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 15,
            'price' => 7400,
            'stock' => 102,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 16,
            'price' => 7400,
            'stock' => 134,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 17,
            'price' => 7400,
            'stock' => 98,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 18,
            'price' => 7400,
            'stock' => 99,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 19,
            'price' => 7400,
            'stock' => 67,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 20,
            'price' => 7400,
            'stock' => 88,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 21,
            'price' => 7400,
            'stock' => 52,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 22,
            'price' => 7400,
            'stock' => 81,
        ]);
        Product::factory()->create([
            'article_number' => 29468153,
            'type_id' => 6,
            'material_id' => 2,
            'model_id' => 4,
            'size' => 23,
            'price' => 7400,
            'stock' => 59,
        ]);

        /* Charles rose gold */
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 14,
            'price' => 6800,
            'stock' => 86,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 15,
            'price' => 6800,
            'stock' => 72,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 16,
            'price' => 6800,
            'stock' => 97,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 17,
            'price' => 6800,
            'stock' => 77,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 18,
            'price' => 6800,
            'stock' => 94,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 19,
            'price' => 6800,
            'stock' => 104,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 20,
            'price' => 6800,
            'stock' => 46,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 21,
            'price' => 6800,
            'stock' => 43,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 22,
            'price' => 6800,
            'stock' => 24,
        ]);
        Product::factory()->create([
            'article_number' => 81735246,
            'type_id' => 4,
            'material_id' => 3,
            'model_id' => 5,
            'size' => 23,
            'price' => 6800,
            'stock' => 56,
        ]);

        /* Alexander gold */
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 14,
            'price' => 9700,
            'stock' => 104,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 15,
            'price' => 9700,
            'stock' => 91,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 16,
            'price' => 6800,
            'stock' => 97,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 17,
            'price' => 6800,
            'stock' => 124,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 18,
            'price' => 6800,
            'stock' => 152,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 19,
            'price' => 6800,
            'stock' => 87,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 20,
            'price' => 6800,
            'stock' => 56,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 21,
            'price' => 6800,
            'stock' => 100,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 22,
            'price' => 6800,
            'stock' => 90,
        ]);
        Product::factory()->create([
            'article_number' => 63052841,
            'type_id' => 5,
            'material_id' => 1,
            'model_id' => 6,
            'size' => 23,
            'price' => 6800,
            'stock' => 88,
        ]);

        /* Amelia silver */
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 14,
            'price' => 7100,
            'stock' => 120,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 15,
            'price' => 7100,
            'stock' => 102,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 16,
            'price' => 7100,
            'stock' => 104,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 17,
            'price' => 7100,
            'stock' => 130,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 18,
            'price' => 7100,
            'stock' => 150,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 19,
            'price' => 7100,
            'stock' => 112,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 20,
            'price' => 7100,
            'stock' => 134,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 21,
            'price' => 7100,
            'stock' => 111,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 22,
            'price' => 7100,
            'stock' => 98,
        ]);
        Product::factory()->create([
            'article_number' => 15372849,
            'type_id' => 1,
            'material_id' => 2,
            'model_id' => 1,
            'size' => 23,
            'price' => 7100,
            'stock' => 87,
        ]);

        /* Maria rose gold */
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 14,
            'price' => 6600,
            'stock' => 99,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 15,
            'price' => 6600,
            'stock' => 79,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 16,
            'price' => 6600,
            'stock' => 109,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 17,
            'price' => 6600,
            'stock' => 97,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 18,
            'price' => 6600,
            'stock' => 104,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 19,
            'price' => 6600,
            'stock' => 112,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 20,
            'price' => 6600,
            'stock' => 123,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 21,
            'price' => 6600,
            'stock' => 118,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 22,
            'price' => 6600,
            'stock' => 87,
        ]);
        Product::factory()->create([
            'article_number' => 47268195,
            'type_id' => 2,
            'material_id' => 3,
            'model_id' => 2,
            'size' => 23,
            'price' => 6600,
            'stock' => 89,
        ]);


        /* Jasmine gold */
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 14,
            'price' => 5900,
            'stock' => 101,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 15,
            'price' => 5900,
            'stock' => 198,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 16,
            'price' => 5900,
            'stock' => 110,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 17,
            'price' => 5900,
            'stock' => 131,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 18,
            'price' => 5900,
            'stock' => 121,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 19,
            'price' => 5900,
            'stock' => 198,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 20,
            'price' => 5900,
            'stock' => 98,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 21,
            'price' => 5900,
            'stock' => 141,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 22,
            'price' => 5900,
            'stock' => 134,
        ]);
        Product::factory()->create([
            'article_number' => 60829314,
            'type_id' => 3,
            'material_id' => 1,
            'model_id' => 3,
            'size' => 23,
            'price' => 5900,
            'stock' => 86,
        ]);

        /* Charles silver */
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 14,
            'price' => 7300,
            'stock' => 86,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 15,
            'price' => 7300,
            'stock' => 84,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 16,
            'price' => 7300,
            'stock' => 123,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 17,
            'price' => 7300,
            'stock' => 134,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 18,
            'price' => 7300,
            'stock' => 143,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 19,
            'price' => 7300,
            'stock' => 157,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 20,
            'price' => 7300,
            'stock' => 108,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 21,
            'price' => 7300,
            'stock' => 96,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 22,
            'price' => 7300,
            'stock' => 76,
        ]);
        Product::factory()->create([
            'article_number' => 92415738,
            'type_id' => 4,
            'material_id' => 2,
            'model_id' => 5,
            'size' => 23,
            'price' => 7300,
            'stock' => 46,
        ]);

        /* Alexander rose gold */
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 14,
            'price' => 6900,
            'stock' => 143,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 15,
            'price' => 6900,
            'stock' => 139,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 16,
            'price' => 6900,
            'stock' => 186,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 17,
            'price' => 6900,
            'stock' => 133,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 18,
            'price' => 6900,
            'stock' => 118,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 19,
            'price' => 6900,
            'stock' => 83,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 20,
            'price' => 6900,
            'stock' => 129,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 21,
            'price' => 6900,
            'stock' => 109,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 22,
            'price' => 6900,
            'stock' => 75,
        ]);
        Product::factory()->create([
            'article_number' => 73154926,
            'type_id' => 5,
            'material_id' => 3,
            'model_id' => 6,
            'size' => 23,
            'price' => 6900,
            'stock' => 56,
        ]);
        /* Jean gold */
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 14,
            'price' => 8200,
            'stock' => 67,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 15,
            'price' => 8200,
            'stock' => 45,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 16,
            'price' => 8200,
            'stock' => 52,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 17,
            'price' => 8200,
            'stock' => 87,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 18,
            'price' => 8200,
            'stock' => 93,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 19,
            'price' => 8200,
            'stock' => 67,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 20,
            'price' => 8200,
            'stock' => 110,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 21,
            'price' => 8200,
            'stock' => 98,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 22,
            'price' => 8200,
            'stock' => 132,
        ]);
        Product::factory()->create([
            'article_number' => 38562047,
            'type_id' => 6,
            'material_id' => 1,
            'model_id' => 4,
            'size' => 23,
            'price' => 8200,
            'stock' => 145,
        ]);
    }
}
