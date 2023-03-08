<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Auction;
use App\Models\User;
use App\Models\Bid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
        ]);

        Item::factory(28)->create();
        Auction::factory(25)->create();
        User::factory(75)->create();
        Bid::factory(120)->create();
    }
}
