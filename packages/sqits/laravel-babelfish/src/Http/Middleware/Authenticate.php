<?php

namespace Sqits\Babelfish\Http\Middleware;


class Authenticate
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response|null
     */
    public function handle($request, $next)
    {
        return $next($request); // or abort(403)
    }
}
