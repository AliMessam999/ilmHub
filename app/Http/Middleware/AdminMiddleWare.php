<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(env('APP_ENV') == 'production'){
            $publicIp = request()->ip();
        }else{
            $publicIp = file_get_contents('https://api64.ipify.org?format=json');
            $publicIp = json_decode($publicIp)->ip;
        }
        

        $allowedIps = ['58.65.177.181','203.124.36.134','115.186.136.48'];
        if (!in_array($publicIp, $allowedIps)) {
            abort(403, 'Unauthorized IP address.');
        }
        return $next($request);
    }
}
