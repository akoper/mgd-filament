<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\Process;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Process>
 */
class ProcessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Process::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'org_id' => null, // Will be set later or can be customized
            'creator_id' => null, // Will be set later or can be customized
            'description' => fake()->paragraph(),
            'project_id' => null, // Will be set later or can be customized
            'metric_id' => null, // Will be set later or can be customized
            'length' => fake()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Set the organization for the process.
     *
     * @param Organization|int $organization
     * @return $this
     */
    public function forOrganization($organization)
    {
        return $this->state(fn (array $attributes) => [
            'org_id' => $organization instanceof Organization ? $organization->id : $organization,
        ]);
    }

    /**
     * Set the creator for the process.
     *
     * @param User|int $user
     * @return $this
     */
    public function byCreator($user)
    {
        return $this->state(fn (array $attributes) => [
            'creator_id' => $user instanceof User ? $user->id : $user,
        ]);
    }

    /**
     * Set the project for the process.
     *
     * @param Project|int $project
     * @return $this
     */
    public function forProject($project)
    {
        return $this->state(fn (array $attributes) => [
            'project_id' => $project instanceof Project ? $project->id : $project,
        ]);
    }
}
