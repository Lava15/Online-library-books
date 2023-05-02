<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
            ],
            [
                'name' => 'employee',
            ],
            [
                'name' => 'reader',
            ]
        ];

        foreach ($roles as $role) {
            Role::query()->create($role);
        }
    }
}
