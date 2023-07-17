<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AlunosGroupAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Verifica se o usuario esta no grupo de Alunos
        if (auth()->check() && auth()->user()->usergroup === 'Alunos') {
            return $next($request);
        }
        
        return response('Unauthorized', 401);
    }
}
