<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *   $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('content');
            $table->timestamp('publishDate')->nullable();
            $table->boolean('is_published')->default(false);
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(50),
            'content' => fake()->text(250),
            'publishDate' => now()
        ];
    }
}
