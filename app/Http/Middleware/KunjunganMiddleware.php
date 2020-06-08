<?php

namespace App\Http\Middleware;

use App\Repository\KunjunganRepository;
use Closure;

class KunjunganMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        if(\Auth::guest()){
            KunjunganRepository::store([
                "ip_address"    => json_encode($request->getClientIps()),
                "uri"           => $request->getUri(),
                "user_agent"    => $request->header("user-agent"),
                "referer"       => $request->header("referer")
            ]);
        }

        return $next($request);
    }
}
