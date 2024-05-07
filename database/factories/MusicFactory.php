<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'artist' => $this->faker->name(),
            'release_year' => $this->faker->year(),
            'duration' => $this->faker->randomFloat(2, 2, 10),
            'lyrics' => $this->faker->paragraph(),
            'genre' => $this->faker->randomElement(['pop', 'rock', 'jazz', 'classical']),
            'is_explicit' => $this->faker->boolean(),
            'release_date' => $this->faker->date(),
            'popularity' => $this->faker->randomFloat(1, 0, 10),
            'description' => $this->faker->paragraphs(3, true),
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}
