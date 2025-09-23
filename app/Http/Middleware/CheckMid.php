<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

use function Laravel\Prompts\text;

class CheckMid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Log::debug('Hey abhi middleware works');
        
        // Return plain text response
        // return response('Middleware is working!', 200);
        Log::debug($request->header());
        $ua = $request->header("user-agent");
        if(str_contains($ua,"Mozilla")){
            return response("This user is not permitted to access the application");
        }
        return $next($request);
    }
}
