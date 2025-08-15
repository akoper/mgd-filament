<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use App\Models\Organization;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'created_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'start_date' => fake()->dateTimeBetween('-6 months', 'now'),
            'end_date' => fake()->optional(0.7)->dateTimeBetween('now', '+6 months'),
            'closed_date' => null,
            'recipient_id' => User::factory(),
            'creator_id' => User::factory(),
            'project_id' => Project::factory(),
            'org_id' => Organization::factory(),
            'metric_id' => null,
            'status' => fake()->randomElement(['pending', 'in_progress', 'completed', 'cancelled']),
            'public' => fake()->randomElement(['yes', 'no']),
            'street' => fake()->optional()->streetAddress(),
            'location_id' => null,
            'city_id' => City::factory(),
            'state_id' => null,
            'country_id' => null,
            'latitude' => fake()->optional()->latitude(),
            'longitude' => fake()->optional()->longitude(),
            'cause_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the task is completed.
     */
    public function completed(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'completed',
            'closed_date' => fake()->dateTimeBetween('-3 months', 'now'),
        ]);
    }

    /**
     * Indicate that the task belongs to a specific project.
     */
    public function forProject(Project $project): static
    {
        return $this->state(fn (array $attributes) => [
            'project_id' => $project->id,
            'org_id' => $project->org_id,
        ]);
    }
}
