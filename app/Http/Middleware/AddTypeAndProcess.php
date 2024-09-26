<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddTypeAndProcess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // İsteğe 'type' ve 'process' parametrelerini ekleyelim.
        $request->merge([
            'type' => $request->input('type', 'default-type'), // 'type' default olarak atanabilir
            'process' => $request->input('process', 'default-process') // 'process' default olarak atanabilir
        ]);

        return $next($request);
    }
}
