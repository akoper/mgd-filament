<?php

namespace Database\Seeders;

use App\Models\Cause;
use Illuminate\Database\Seeder;

class CauseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 100 causes
        Cause::factory(100)->create();
    }
}
