<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Member',
            'username' => 'member',
            'password' => bcrypt('member'),
            'phone' => '0810',
            'role' => 'Member',
        ]);

        User::create([
            'name' => 'Aripin',
            'username' => 'arp',
            'password' => bcrypt('arp'),
            'phone' => '0811',
            'role' => 'Member',
        ]);
        
        User::create([
            'name'=>'Staff',
            'username'=>'staff',
            'password'=>bcrypt('staff'),
            'phone' => '0812',
            'role'=>'Staff',
        ]);

        User::create([
            'name'=>'Kalara',
            'username'=>'kalara',
            'password'=>bcrypt('kalara'),
            'phone' => '0813',
            'role'=>'Staff',
        ]);

        User::create([
            'name'=>'Admin',
            'username'=>'admin',
            'password'=>bcrypt('admin'),
            'phone' => '0814',
            'role'=>'Admin',
        ]);
        
        User::create([
            'name'=>'Dirga',
            'username'=>'dirga',
            'password'=>bcrypt('dirga'),
            'phone' => '0815',
            'role'=>'Admin',
        ]);
    }
}
