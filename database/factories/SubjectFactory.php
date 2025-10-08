<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['Mathematics', 'Science', 'History', 'Geography', 'English', 'Art', 'Physical Education']),
            'description' => fake()->unique()->randomElement(['Basic concepts and principles', 'Scientific method and experimentation', 'Historical events and timelines', 'Physical features and human-environment interaction', 'Grammar, vocabulary, and literature', 'Techniques and styles of various art forms', 'Fitness, health, and sportsmanship']),
        ];
    }
}