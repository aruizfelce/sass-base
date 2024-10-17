<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyCentralDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $domain = $request->getHost();
        if (!in_array($domain, config('tenancy.central_domains'))) {
            return redirect()->route('welcome');
        }        
        return $next($request);
    }
}
