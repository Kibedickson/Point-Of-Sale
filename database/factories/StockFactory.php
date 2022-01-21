<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Stock;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'media' => $this->faker->word,
            'price' => $this->faker->numberBetween(-10000, 10000),
            'cost' => $this->faker->numberBetween(-10000, 10000),
            'unit' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'security_stock' => $this->faker->numberBetween(-10000, 10000),
            'publish_at' => $this->faker->date(),
            'category_id' => Category::factory(),
        ];
    }
}
