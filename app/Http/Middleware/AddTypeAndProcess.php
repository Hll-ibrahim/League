<?php

namespace App\Http\Middleware;

use App\Services\Contracts\RequestServiceInterface;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddTypeAndProcess
{
    protected $requestService;

    public function __construct(RequestServiceInterface $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $type = $request->input('type', 'default_type');      // İsteğin içinde 'type' yoksa varsayılan olarak 3 kullan
        $process = $request->input('process', 'default_process'); // İsteğin içinde 'process' yoksa varsayılan olarak 2 kullan

        // 'type' ve 'process' değerlerini request'e ekleyin
        $request->merge([
            'type' => $type,
            'process' => $process,
        ]);

        return $next($request);
    }
}
