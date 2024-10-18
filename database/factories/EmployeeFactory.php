<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 65),
            'post' => $this->faker->jobTitle(),
            'salary' => $this->faker->randomFloat(2, 30000, 100000),
            'dob' => $this->faker->date('Y-m-d', '2005-01-01'),
            'city' => $this->faker->city(),
        ];
    }
}
