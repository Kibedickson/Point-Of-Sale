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
            'payroll_number' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'designation' => $this->faker->word,
            'id_number' => $this->faker->numberBetween(-10000, 10000),
            'joined_at' => $this->faker->date(),
            'kra_pin' => $this->faker->word,
            'nhif_no' => $this->faker->word,
            'nssf_no' => $this->faker->word,
            'salary' => $this->faker->numberBetween(-10000, 10000),
            'hourly_rate' => $this->faker->numberBetween(-10000, 10000),
            'payment_type' => $this->faker->word,
        ];
    }
}
