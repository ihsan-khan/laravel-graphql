<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all user IDs from the users table
        $userIds = User::pluck('id')->toArray();

        foreach (range(1, 10) as $index) { 
            DB::table('tasks')->insert([
                [
                    'name' => 'Complete Documentation',
                    'user_id' => $userIds[array_rand($userIds)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Develop New Feature',
                    'user_id' => $userIds[array_rand($userIds)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bug Fixes',
                    'user_id' => $userIds[array_rand($userIds)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'task D',
                    'user_id' => $userIds[array_rand($userIds)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Task E',
                    'user_id' => $userIds[array_rand($userIds)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
