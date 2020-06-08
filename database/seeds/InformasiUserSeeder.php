<?php

use App\InformasiUser;
use App\User;
use Illuminate\Database\Seeder;

class InformasiUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $user->info()->saveMany(
            factory(InformasiUser::class, 1)->make([
                "facebook" => "agriedd"
            ])
        );
    }
}
