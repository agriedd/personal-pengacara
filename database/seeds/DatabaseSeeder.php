<?php

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
        $this->call(AdminSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(ClientSeeder::class);
        // $this->call(ArticleSeeder::class);
        // $this->call(HalamanSeeder::class);
        // $this->call(AlbumSeeder::class);
        // $this->call(GaleriSeeder::class);
    }
}
