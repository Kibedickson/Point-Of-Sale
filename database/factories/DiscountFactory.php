<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Discount;

class DiscountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Discount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->word,
            'type' => $this->faker->numberBetween(0, 3),
            'value' => $this->faker->numberBetween(-10000, 10000),
            'start_at' => $this->faker->date(),
            'end_at' => $this->faker->date(),
        ];
    }
}
