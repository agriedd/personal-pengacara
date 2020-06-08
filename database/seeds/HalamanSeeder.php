<?php

use App\Admin;
use App\Halaman;
use App\HalamanHistory;
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
        )->each(function($halaman){
            $halaman->history()->saveMany(
                factory(HalamanHistory::class, 1)->make()
            );
        });
    }
}
