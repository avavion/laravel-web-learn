<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Subscription;
use App\Models\User;
use Database\Factories\SubscriptionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Subscription::factory(3)->create();
        Role::factory(3)->create();
        User::factory(10)->create();
    }
}
