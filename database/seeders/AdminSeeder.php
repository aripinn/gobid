<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Admin',
            'username'=>'admin',
            'role'=>'ADMIN',
            'Email' => 'admin@admin.com',
            'password'=>bcrypt('password')
        ]);

        Admin::create([
            'name'=>'Staff',
            'username'=>'staff',
            'role'=>'STAFF',
            'Email' => 'staff@staff.com',
            'password'=>bcrypt('password')
        ]);

        Admin::create([
            'name'=>'Dirga',
            'username'=>'dirga',
            'role'=>'ADMIN',
            'Email' => 'dirga@admin.com',
            'password'=>bcrypt('dirga')
        ]);

        Admin::create([
            'name'=>'Kalara',
            'username'=>'kalara',
            'role'=>'STAFF',
            'Email' => 'kalara@staff.com',
            'password'=>bcrypt('kalara')
        ]);
    }
}
