<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Purchase;
use App\Models\Supplier;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

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
            'total' => $this->faker->numberBetween(-10000, 10000),
            'paid' => $this->faker->numberBetween(-10000, 10000),
            'due' => $this->faker->numberBetween(-10000, 10000),
            'supplier_id' => Supplier::factory(),
        ];
    }
}
