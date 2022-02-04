<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tracking;
use Illuminate\Support\Str;

class TrackingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Tracking::class;

    public function definition()
    {
        return [
            //
            'title' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'tracking_id' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'from_address' => $this->faker->address(),
            'to_address' => $this->faker->address(),
            'from_city' => $this->faker->city(),
            'to_city' => $this->faker->city(),
            'from_state' => $this->faker->state(),
            'to_state' => $this->faker->state(),
            'from_country' => $this->faker->country(),
            'to_country' => $this->faker->country(),
            'from_phone' => $this->faker->phoneNumber(),
            'to_phone' => $this->faker->phoneNumber(),
            'from_email' => $this->faker->email(),
            'to_email' => $this->faker->email(),
            'status' => // 1 or 2, 1 for delivered, 2 for pending
            $this->faker->numberBetween(1, 2),
            'weight' => $this->faker->numberBetween(1, 10),
            'height' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(1, 10),
            'expected_delivery_date' => $this->faker->date(),
            'delivery_date' => $this->faker->date(),
        ];
    }
}
