<?php

namespace Database\Factories;
use App\Models\Mibro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mibro>
 */
class MibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Mibro::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence
     
        ];
    }
}
