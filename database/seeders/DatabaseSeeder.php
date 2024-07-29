<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Example;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        echo "=====================================" . PHP_EOL;

        for($i = 0; $i < 100; $i++) {
            Example::create([
                'user_ids' => [
                    rand(1, 100),
                    rand(101, 200),
                    rand(201, 300),
                    rand(301, 500),
                ],

                'info' => [
                    "age" => 25, 
                    "city" => "Los Angeles"
                ]
            ]);
        }
    }
}
