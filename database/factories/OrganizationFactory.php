<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'phone' => fake()->phoneNumber(),
            'street' => fake()->streetAddress(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'zip_code' => fake()->postcode(),
            'mission_statement' => fake()->paragraph(),
            'admin_user_id' => null, // Will be set later or can be customized
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Organization $organization) {
            // Additional configuration if needed
        })->afterCreating(function (Organization $organization) {
            // Additional configuration if needed
        });
    }

    /**
     * Set the admin user for the organization.
     *
     * @param User|int $user
     * @return $this
     */
    public function withAdmin($user)
    {
        return $this->state(fn (array $attributes) => [
            'admin_user_id' => $user instanceof User ? $user->id : $user,
        ]);
    }
}
