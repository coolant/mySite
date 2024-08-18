<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Aykut',
            'email'=>'aykutyilm4z@outlook.com',
            'password'=> bcrypt('12345678'),
            'aboutme'=>'fdasfdasfsadfsadf',
            'birthday'=>'2000-08-18'
        ]);
    }
}
