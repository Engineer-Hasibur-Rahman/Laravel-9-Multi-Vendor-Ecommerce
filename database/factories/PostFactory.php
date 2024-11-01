<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Post;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIds     = User::pluck('id')->toArray();

        return [
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'user_id'     => $userIds[array_rand($userIds)],
        ];
    }
}
