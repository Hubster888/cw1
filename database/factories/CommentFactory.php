<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "authorName" => $this->faker->name(),
            "content" => $this->faker->realText($maxNbChars = 500),
            "post_id" => $this->faker->numberBetween(1,50),
        ];
    }
}
