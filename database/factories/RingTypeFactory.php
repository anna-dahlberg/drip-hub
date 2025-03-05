<?php

namespace Database\Factories;

use App\Models\RingType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RingType>
 */
class RingTypeFactory extends Factory
{
    protected $model = RingType::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['band ring', 'solitaire ring', 'halo ring', 'three-stone ring', 'eternity ring', 'signet ring']),
        ];
    }
}
