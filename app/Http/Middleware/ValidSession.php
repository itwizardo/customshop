<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->has(env('SESSION_CKEY'))) return redirect()->route('main.step_one');

        return $next($request);
    }
}
