<?php

use App\Album;
use App\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album = Album::first();
        $album->galeri()->saveMany(
            factory(Galeri::class, 1)->make()
        );
    }
}
