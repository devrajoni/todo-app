<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 200; $i++) {
            Task::updateOrcreate(
                ['id' => $i],
                [
                    'user_id' => rand(1, 50),
                    'title' => $faker->text(),
                    'description' => $faker->text(),
                    'started_at' => now(),
                    'status' => 'Pending',
                ]
            );
        }
        
    }
}
