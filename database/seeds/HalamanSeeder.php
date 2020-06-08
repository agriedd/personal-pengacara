<?php

use App\Admin;
use App\Halaman;
use Illuminate\Database\Seeder;

class HalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::first();
        $admin->halaman()->saveMany(
            factory(Halaman::class, 3)->make()
        );
    }
}
