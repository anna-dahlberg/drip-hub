<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Material;
use App\Models\ModelRing;
use App\Models\RingType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'article_number' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'type_id' => function () {
                return RingType::inRandomOrder()->first()->id ?? 1;
            },
            'material_id' => function () {
                return Material::inRandomOrder()->first()->id ?? 1;
            },
            'model_id' => function () {
                return ModelRing::inRandomOrder()->first()->id ?? 1;
            },
            'size' => $this->faker->numberBetween(14, 22),
            'price' => $this->faker->numberBetween(5000, 15000),
            'stock' => $this->faker->numberBetween(10, 200),
        ];
    }
}
