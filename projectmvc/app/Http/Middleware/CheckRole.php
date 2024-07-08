<?php

namespace App\Http\Middleware;

use App\Models\Roles;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{

    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->check()) {
            abort(403, 'Unauthorized action.');
        }

        $userRoleId = auth()->user()->role_id;
        $userRoleName = Roles::where('id', $userRoleId)->value('name');

        if (!in_array($userRoleName, $roles)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
