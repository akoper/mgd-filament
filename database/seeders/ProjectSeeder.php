<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get some existing organizations and users if available
        $organizations = Organization::all();
        $users = User::all();

        // Create 80 projects with random organizations and creators
        Project::factory(80)
            ->state(function () use ($organizations, $users) {
                return [
                    'org_id' => $organizations->isNotEmpty()
                        ? $organizations->random()->id
                        : Organization::factory()->create()->id,
                    'creator_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                ];
            })
            ->create();

        // Create 20 completed projects
        Project::factory(20)
            ->completed()
            ->state(function () use ($organizations, $users) {
                return [
                    'org_id' => $organizations->isNotEmpty()
                        ? $organizations->random()->id
                        : Organization::factory()->create()->id,
                    'creator_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                ];
            })
            ->create();
    }
}
