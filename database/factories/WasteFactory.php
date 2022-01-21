<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Stock;
use App\Models\User;
use App\Models\Waste;

class WasteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Waste::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->word,
            'date' => $this->faker->date(),
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'total' => $this->faker->numberBetween(-10000, 10000),
            'description' => $this->faker->text,
            'user_id' => User::factory(),
            'stock_id' => Stock::factory(),
        ];
    }
}
