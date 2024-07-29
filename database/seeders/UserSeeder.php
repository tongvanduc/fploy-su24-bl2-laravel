<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = now();
        $b = bcrypt('password');
        for($i = 0; $i < 500; $i++) {

            $c = \Str::random(10);

            $data[] = [
                'name' => fake()->name(),
                'email' => $i . $c . '@gmail.com',
                'email_verified_at' => $a,
                'password' => $b,
                'remember_token' => $c,
            ];
        }

        DB::table('users')->insert($data);
    }
}
