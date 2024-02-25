<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name'=>'Javier',
                'email'=>'javier@gmail.com',
                'password'=>bcrypt('password'),
                'email_verified_at'=>now()
            ],
            [
                'name'=>'Juan',
                'email'=>'juan@gmail.com',
                'password'=>bcrypt('pasaporte'),
                'email_verified_at'=>now()
            ],
        ];
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'escritor']);
        
        foreach($users as $user){
            User::create($user);
            $user = User::find(1);
            $user->assignRole($role1);
        }
    }
}
