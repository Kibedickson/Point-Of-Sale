<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'payroll_number' => $this->faker->unique()->numberBetween(1, 100),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'designation' => $this->faker->word,
            'id_number' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'joined_at' => $this->faker->date(),
            'kra_pin' => $this->faker->unique()->password,
            'nhif_no' => $this->faker->unique()->password,
            'nssf_no' => $this->faker->unique()->password,
            'salary' => $this->faker->numberBetween(2000000, 3000000),
            'daily_rate' => $this->faker->numberBetween(50000, 100000),
            'payment_type' => $this->faker->randomElement(['salary', 'daily']),
        ];
    }
}
