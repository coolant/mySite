<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
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


        $permissions['blog-admin']=[
            [
                'title'=>'Can view the blog text',
                'description'=>'Can view the blog text'
            ],
            [
                'title'=>'Can edit the blog text',
                'description'=>'Can edit the blog text'
            ],
            [
                'title'=>'Can view the blog categories',
                'description'=>'Can view the blog categories'
            ],
            [
                'title'=>'Can edit the blog categories',
                'description'=>'Can edit the blog categories'
            ],
        ];


           $permissions['ecommerce-admin']=[
            [
                'title'=>'Can view the orders',
                'description'=>'Can view the orders'
            ],
            [
                'title'=>'Can edit the orders',
                'description'=>'Can edit the orders'
            ],
            [
                'title'=>'Can view the products',
                'description'=>'Can view the products'
            ],
            [
                'title'=>'Can edit the products',
                'description'=>'Can edit the products'
            ],
        ];

        foreach($permissions as $key => $permission){
            $role = Role::where('name', $key)->first();
            // dd($key,$permission);

            foreach( $permission as $p){
                $newPermission = Permission::updateOrCreate(
                    ['name' => Str::slug($p['title'])],
                    [
                        'name' => Str::slug($p['title']),
                        'title' => Str::slug($p['title']),
                        'description' => Str::slug($p['description'])
                    ]
                );
            }
            //set permission to role

            $role->givePermissionTo( $newPermission);
           
        }



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
