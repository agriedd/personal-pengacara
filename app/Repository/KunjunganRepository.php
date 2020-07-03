<?php

namespace App\Repository;

use App\Kunjungan;

class KunjunganRepository{
    
    public static function orderWhitelist(){
        return collect([ 'created_at', 'id', 'uri', 'user_agent', 'ip_address' ]);
    }

    public static function store($data){
        $data = collect($data);

        return Kunjungan::create(
            $data->all()
        );
    }
    public static function filter($request){
        $query = Kunjungan::when($request->has("search"), function($q)use($request){
            return $q
                ->where('ip_address', 'like', "%{$request->search}%")
                ->orWhere('uri', 'like', "%{$request->search}%")
                ->orWhere('location', 'like', "%{$request->search}%")
                ->orWhere('referer', 'like', "%{$request->search}%")
                ->orWhere('user_agent', 'like', "%{$request->search}%");
            })
            ->when($request->filled("order") && self::orderWhitelist()->contains($request->order), function($q)use($request){
                return $q->orderBy(
                    $request->order,
                    $request->has("asc") && $request->asc == "true" ? "ASC" : "DESC"
                );
            });
        return $query;
    }
    public static function lastMonth(){
        $query = Kunjungan::whereRaw("YEAR(created_at) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)")
            ->whereRaw("MONTH(created_at) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)");
        return $query;
    }
    public static function month(){
        $query = Kunjungan::whereRaw("YEAR(created_at) = YEAR(CURRENT_DATE)")
            ->whereRaw("MONTH(created_at) = MONTH(CURRENT_DATE)");
        return $query;
    }
    public static function today(){
        $query = Kunjungan::whereRaw("DATE(created_at) = CURDATE()");
        return $query;
    }
}
