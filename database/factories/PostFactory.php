<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(rand(3, 5)),
            'body' => collect($this->faker->paragraphs(rand(20, 50)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'category_id' => rand(1, 3),
            'user_id' => rand(1, 10)
        ];
    }
}
