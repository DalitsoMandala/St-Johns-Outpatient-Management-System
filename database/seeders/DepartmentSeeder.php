<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [    
            ['code' => 'reception', 'name' => 'Reception'],
            ['code' => 'nurse', 'name' => 'Nurse'],
            ['code' => 'doctor', 'name' => 'Doctor'],
            ['code' => 'laboratory', 'name' => 'Laboratory'],
            ['code' => 'pharmacy', 'name' => 'Pharmacy'],
            ['code' => 'cashier', 'name' => 'Cashier'],
        ];

        foreach ($departments as $d) {
            DB::table('departments')->updateOrInsert(
                ['code' => $d['code']],
                ['name' => $d['name'], 'active' => true, 'updated_at' => now(), 'created_at' => now()]
            );
        }
    }
}
