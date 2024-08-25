<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'tester',
            'nim' => '2501988230',
            'password' => Hash::make('asdasdasd'),
        ]);
        DB::table('students')->insert([
            'name' => 'Budi',
            'nim' => '2501988231',
            'password' => Hash::make('asdasdasd'),
        ]);
        DB::table('students')->insert([
            'name' => 'Arya',
            'nim' => '2501988232',
            'password' => Hash::make('asdasdasd'),
        ]);
    }
}
