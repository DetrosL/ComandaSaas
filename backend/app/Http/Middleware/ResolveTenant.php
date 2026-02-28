<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;

class ResolveTenant
{
    public function handle(Request $request, Closure $next)
    {
        $tenantKey = $request->header('X-Tenant');

        if (!$tenantKey) {
            return response()->json([
                'success' => false,
                'message' => 'Header X-Tenant é obrigatório.',
                'data' => null,
            ], 400);
        }

        $tenant = Tenant::query()
            ->where('id', $tenantKey)
            ->orWhere('slug', $tenantKey)
            ->first();

        if (!$tenant) {
            return response()->json([
                'success' => false,
                'message' => 'Tenant não encontrado.',
                'data' => null,
            ], 404);
        }

        app()->instance(Tenant::class, $tenant);

        return $next($request);
    }
}