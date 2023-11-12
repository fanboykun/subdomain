<?php

namespace App\Http\Middleware;

use App\Models\Invitation;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckWeddingExistance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $invitation = $request->route('invitation');
        if(! Invitation::where('subdomain', $invitation)){
            return abort(404);
        }
        config(['debugbar.enabled' => false]);
        return $next($request);
    }
}
