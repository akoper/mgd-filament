<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use App\Models\City;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing projects, users, and cities if available
        $projects = Project::all();
        $users = User::all();
        $cities = City::all();

        // Create 20 tasks with random associations
        Task::factory(20)
            ->state(function () use ($projects, $users, $cities) {
                $project = $projects->isNotEmpty()
                    ? $projects->random()
                    : Project::factory()->create();

                return [
                    'project_id' => $project->id,
                    'org_id' => $project->org_id,
                    'creator_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                    'recipient_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                    'city_id' => $cities->isNotEmpty()
                        ? $cities->random()->id
                        : City::factory()->create()->id,
                ];
            })
            ->create();

        // Create 10 completed tasks
        Task::factory(10)
            ->completed()
            ->state(function () use ($projects, $users, $cities) {
                $project = $projects->isNotEmpty()
                    ? $projects->random()
                    : Project::factory()->create();

                return [
                    'project_id' => $project->id,
                    'org_id' => $project->org_id,
                    'creator_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                    'recipient_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                    'city_id' => $cities->isNotEmpty()
                        ? $cities->random()->id
                        : City::factory()->create()->id,
                ];
            })
            ->create();

        // Create 5 tasks for each project (if there are any projects)
        if ($projects->isNotEmpty()) {
            foreach ($projects->take(5) as $project) {
                Task::factory(5)
                    ->forProject($project)
                    ->state(function () use ($users, $cities) {
                        return [
                            'creator_id' => $users->isNotEmpty()
                                ? $users->random()->id
                                : User::factory()->create()->id,
                            'recipient_id' => $users->isNotEmpty()
                                ? $users->random()->id
                                : User::factory()->create()->id,
                            'city_id' => $cities->isNotEmpty()
                                ? $cities->random()->id
                                : City::factory()->create()->id,
                        ];
                    })
                    ->create();
            }
        }
    }
}
