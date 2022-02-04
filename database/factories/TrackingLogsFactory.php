<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TrackingLogs;

class TrackingLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TrackingLogs::class;

    public function definition()
    {
        return [
            //
            'tracking_id' => $this->faker->unique()->randomNumber(5),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->numberBetween(1, 2),
            'location' => $this->faker->address(),
            'time' => $this->faker->time(),
            'date' => $this->faker->date(),

        ];
    }
}
