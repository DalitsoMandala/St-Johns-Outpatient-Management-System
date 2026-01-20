<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            'admin' => [
                'name' => 'Admin',
                'email' => 'admin@example.com',
            ],
            'receptionist' => [
                'name' => 'Receptionist',
                'email' => 'receptionist@example.com',
            ],
            'nurse' => [
                'name' => 'Nurse',
                'email' => 'nurse@example.com',
            ],
            'pathologist' => [
                'name' => 'Pathologist',
                'email' => 'pathologist@example.com',
            ],
            'storesclerk' => [
                'name' => 'Stores Clerk',
                'email' => 'storesclerk@example.com',
            ],
            'pharmacist' => [
                'name' => 'Pharmacist',
                'email' => 'pharmacist@example.com',
            ],
            'cashier' => [
                'name' => 'Cashier',
                'email' => 'cashier@example.com',
            ],
        ];

        foreach ($users as $key => $user) {

        Role::create(['name' => $key]);
          User::firstOrCreate([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'), // password

            ])->assignRole($key);
        }

    }
}
