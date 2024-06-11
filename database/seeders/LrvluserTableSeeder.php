<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LrvluserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testuser')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'age' => 30,
        ]);

        DB::table('testuser')->insert([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'age' => 25,
        ]);

        DB::table('testuser')->insert([
            'name' => 'Alice Johnson',
            'email' => 'alicejohnson@example.com',
            'age' => 28,
        ]);

        // Add more records as needed
    }
}
