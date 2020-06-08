<?php

use App\Admin;
use App\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::first();
        $admin->client()->saveMany(
            factory(Client::class, 3)->make()
        );
    }
}
