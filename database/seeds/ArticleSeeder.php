<?php

use App\Admin;
use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::first();
        $admin->artikel()->saveMany(
            factory(Article::class, 3)->make()
        );
    }
}
