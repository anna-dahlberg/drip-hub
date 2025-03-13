<?php

namespace Database\Factories;

use App\Models\ModelRing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ModelRing>
 */
class ModelRingFactory extends Factory
{
    protected $model = ModelRing::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Amelia', 'Maria', 'Jasmine', 'Jean', 'Charles', 'Alexander']),
        ];
    }
}
