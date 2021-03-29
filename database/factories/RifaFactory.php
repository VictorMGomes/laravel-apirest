<?php

namespace Database\Factories;

use App\Models\Rifa;
use Illuminate\Database\Eloquent\Factories\Factory;

class RifaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rifa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'rifa_category' => $this->faker->text(10),
        ];
    }
}
