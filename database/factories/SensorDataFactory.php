<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SensorData;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SensorData>
 */
class SensorDataFactory extends Factory
{
    protected $model = SensorData::class;
    public function definition()
    {
        return [
            'temperature' => $this->faker->randomFloat(2, -10, 40),  // Example: Random temperature between -10 and 40 degrees
            'humidity' => $this->faker->randomFloat(2, 50, 100),     // Example: Random humidity percentage between 0 and 100
            'light' => $this->faker->numberBetween(0, 100),          // Example: Random light intensity
        ];
    }
}
