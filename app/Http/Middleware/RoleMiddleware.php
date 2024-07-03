<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\$request
    * @param \Closure $next
    * @param string[] ...$roles
    * @return mixed
    */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('admin/');
        }

        $user = Auth::user();
        if (!in_array($user->level->nama_level, $roles)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
