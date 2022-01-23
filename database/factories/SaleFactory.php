<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\User;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'date' => $this->faker->date(),
            'type' => $this->faker->numberBetween(-8, 8),
            'total_items' => $this->faker->numberBetween(-10000, 10000),
            'sub_total' => $this->faker->numberBetween(-10000, 10000),
            'total_payable' => $this->faker->numberBetween(-10000, 10000),
            'discount' => $this->faker->numberBetween(-10000, 10000),
            'paid_amount' => $this->faker->numberBetween(-10000, 10000),
            'given_amount' => $this->faker->numberBetween(-10000, 10000),
            'change_amount' => $this->faker->numberBetween(-10000, 10000),
            'customer_id' => Customer::factory(),
            'employee_id' => Employee::factory(),
        ];
    }
}
