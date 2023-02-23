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
            'phone' => '0811',
        ]);
        
        User::create([
            'name' => 'Shafwana Musyaffa',
            'username' => 'wana',
            'password' => bcrypt('wana'),
            'phone' => '0812',
        ]);
        
        User::create([
            'name' => 'Padli Septiana',
            'username' => 'icarus',
            'password' => bcrypt('icarus'),
            'phone' => '0813',
        ]);
        
        User::create([
            'name' => 'Fariz Ferdiano',
            'username' => 'dyano',
            'password' => bcrypt('dyano'),
            'phone' => '0817',
        ]);
        
        User::create([
            'name' => 'Member',
            'username' => 'member',
            'password' => bcrypt('member'),
            'phone' => '0816',
        ]);
    }
}
