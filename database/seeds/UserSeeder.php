<?php

use App\InformasiUser;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 3)->create()->each(function($user){
            $user->info()->saveMany(
                factory(InformasiUser::class, 1)->make()
            );
        });
    }
}
