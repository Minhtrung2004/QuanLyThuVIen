<?php

namespace Database\Factories;

use App\Models\Reader;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ReaderFactory extends Factory
{
    protected $model = Reader::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'birthday' => $this->faker->dateTime,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}

