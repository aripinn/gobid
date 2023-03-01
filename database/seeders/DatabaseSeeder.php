<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Auction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // \App\Models\User::create([
        //     'name'=>'User',
        //     'Email' => 'user@user.com',
        //     'password'=>bcrypt('password')
        // ]);

        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
        ]);

        Item::factory(100)->create();
        Auction::factory(50)->create();
    }
}
