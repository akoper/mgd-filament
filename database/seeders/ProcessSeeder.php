<?php

namespace Database\Seeders;

use App\Models\Process;
use App\Models\Organization;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing organizations, projects, and users if available
        $organizations = Organization::all();
        $projects = Project::all();
        $users = User::all();

        // Create 100 processes
        Process::factory(100)
            ->state(function () use ($organizations, $projects, $users) {
                $organization = $organizations->isNotEmpty()
                    ? $organizations->random()
                    : Organization::factory()->create();

                return [
                    'org_id' => $organization->id,
                    'creator_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                    'project_id' => $projects->isNotEmpty()
                        ? $projects->random()->id
                        : Project::factory()->create([
                            'org_id' => $organization->id
                        ])->id,
                ];
            })
            ->create();
    }
}
