<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AulasAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Verifica se o usuario esta no grupo de administradores
        if (auth()->check() && (
            auth()->user()->usergroup === 'Administradores'
            || auth()->user()->usergroup === 'Tutores'
            )) {
            return $next($request);
        }
        
        return response('Unauthorized', 401);
    }
}
