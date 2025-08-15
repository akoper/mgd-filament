<?php

namespace Database\Factories;

use App\Models\Recurrence;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recurrence>
 */
class RecurrenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recurrence::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'org_id' => null,
            'project_id' => null,
            'temp_id' => null,
            'user_id' => null,
            'task_id' => null,
            'type' => fake()->randomElement(['once', 'repeat']),
            'recur_period' => fake()->randomElement(['daily', 'weekly', 'monthly', 'yearly']),
            'end_date' => fake()->optional()->date(),
            'Sunday' => fake()->optional()->randomElement(['on', 'off']),
            'Monday' => fake()->optional()->randomElement(['on', 'off']),
            'Tuesday' => fake()->optional()->randomElement(['on', 'off']),
            'Wednesday' => fake()->optional()->randomElement(['on', 'off']),
            'Thursday' => fake()->optional()->randomElement(['on', 'off']),
            'Friday' => fake()->optional()->randomElement(['on', 'off']),
            'Saturday' => fake()->optional()->randomElement(['on', 'off']),
            'monthly_days' => fake()->optional()->numberBetween(1, 31),
            'yearly_day' => fake()->optional()->numberBetween(1, 31),
            'yearly_month' => fake()->optional()->randomElement(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
