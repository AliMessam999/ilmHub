<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        if (env('APP_ENV') == 'production') {
            $publicIp = request()->ip();
        } else {
            $publicIp = file_get_contents('https://api64.ipify.org?format=json');
            $publicIp = json_decode($publicIp)->ip;
        }
        // dd($publicIp,env('APP_ENV'));
        // dd($publicIp, request()->ip(), $_SERVER['REMOTE_ADDR']);


        $allowedIps = [
            '58.65.177.181',
            '203.124.36.134',
            '115.186.136.48',
            '127.0.0.1',
            '2400:adcc:110d:bb01:d90f:a747:9c21:cedf',
            '2407:aa80:314:bdf2:25fe:aa5e:214f:d8cc'
        ];
        Log::info('AdminMiddleWare IP Check: ' . $publicIp);
        if (!in_array($publicIp, $allowedIps)) {
            abort(403, 'Unauthorized IP address.');
        }
        return $next($request);
    }
}
