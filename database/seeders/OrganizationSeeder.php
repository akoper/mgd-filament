<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing users if available
        $users = User::all();

        // Create 100 organizations
        Organization::factory(100)
            ->state(function () use ($users) {
                return [
                    'admin_user_id' => $users->isNotEmpty()
                        ? $users->random()->id
                        : User::factory()->create()->id,
                ];
            })
            ->create();
    }
}
