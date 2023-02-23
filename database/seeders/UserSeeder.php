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
            'name' => 'Aripin',
            'username' => 'arp',
            'password' => bcrypt('arp'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Member',
            'username' => 'member',
            'password' => bcrypt('member'),
            'role' => 'member'
        ]);
    }
}
