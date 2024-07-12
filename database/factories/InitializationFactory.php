<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Initialization;

class InitializationFactory extends Factory
{
    protected $model = Initialization::class;
    public function definition()
    {
        return [
            'temperature' => $this->faker->randomFloat(2, 20, 30),  // Example: Random temperature between 20 and 30 degrees
            'humidity' => $this->faker->randomFloat(2, 50, 90),     // Example: Random humidity percentage between 50 and 90
            'light' => $this->faker->numberBetween(0, 100),         // Example: Random light intensity
            'type' => $this->faker->numberBetween(1, 2),            // Example: Random type between 1 and 2
        ];
    }
}
