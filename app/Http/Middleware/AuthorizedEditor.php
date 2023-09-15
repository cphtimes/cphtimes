<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorizedEditor
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
        if (!$this->isEditor($request)) {
            abort(Response::HTTP_UNAUTHORIZED);
        }
        return $next($request);
    }

    protected function isEditor($request)
    {
        if ($request->user() == null) {
            return false;
        }
        return $request->user()->role->role == 'editor';
    }
}
