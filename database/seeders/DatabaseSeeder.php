<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
       $this->call([
        UserSeeder::class,
        TaskSeeder::class,
        ]);
    }
}
