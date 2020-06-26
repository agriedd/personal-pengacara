<?php

namespace App\Providers;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::macro('whereLatestPublished', function($table, $parentRelatedColumn){
            //sub query untuk mengambil data terakhir info artikel
            //nantinya sub query ini dijadikan filtering published_at null
            //atau tidak pada scope published App\Article
            return $this->where("{$table}.id", function($sub) use ($table, $parentRelatedColumn){
                $sub->select('id')
                    ->from("{$table} AS other")
                    ->whereColumn("other.{$parentRelatedColumn}", "{$table}.{$parentRelatedColumn}")
                    ->latest()
                    ->limit(1);
            });
        });
    }
}
