<?php

namespace App\Http\Middleware;

use Closure;

class Pasien
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if ($request->user()->role == 2){
			return $next($request);
		}
		abort(403, "Cannot access to restricted page");
    }
}
