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
            '154.57.199.98',
        ];
        Log::info('AdminMiddleWare IP Check: ' . $publicIp);
        if (!in_array($publicIp, $allowedIps)) {
            abort(403, 'Unauthorized IP address.');
        }
        return $next($request);
    }
}
