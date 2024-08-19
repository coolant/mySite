<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role= Role::updateOrCreate(
        [
            'name' =>'SuperAdmin'
        ],
        [
            'name' =>'SuperAdmin',
            'title'=>'SuperAdmin',
            'description'=>'SuperAdmin'
        ]);

        $roleBlog= Role::updateOrCreate(
        [
            'name' =>'blog-admin'
        ],
        [
            'name' =>'blog-admin',
            'title'=>'blog-admin',
            'description'=>'blog-admin'
        ]);

        $roleECommerce= Role::updateOrCreate(
        [
            'name' =>'ecommerce-admin'
        ],
        [
            'name' =>'ecommerce-admin',
            'title'=>'ecommerce-admin',
            'description'=>'ecommerce-admin'
        ]);






        $user= User::updateOrCreate(
                [
          
                'email'=>'aykutyilm4z@outlook.com'
           
                ],           
            [
            'name' => 'Aykut',
            'email'=>'aykutyilm4z@outlook.com',
            'password'=> bcrypt('12345678'),
            'aboutme'=>'fdasfdasfsadfsadf',
            'birthday'=>'2000-08-18'
        ]);

        $user->assignRole($role);


        if(User::count()==1){
            $users = User::factory(100)->create();
            foreach ($users as $user) {
                $user->assignRole(rand(0,1) == 1 ? $roleBlog : $roleECommerce);
            }
        }

    }
}
