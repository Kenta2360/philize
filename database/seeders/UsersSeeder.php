<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username'   => 'admin',
            'email'      => 'admin@example.com',
            'password'   => Hash::make('11111111'),
            'role'       => User::ADMIN_ROLE_ID,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        $users = [];
        for($i = 1; $i <= 5; $i++){
            $users[] = [
                'username' => 'user' . $i,
                'email'    => 'user' . $i . '@example.com',
                'password' => Hash::make('11111111'),
                'role'     => User::USER_ROLE_ID,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ];
        }
        DB::table('users')->insert($users);
    }
}
