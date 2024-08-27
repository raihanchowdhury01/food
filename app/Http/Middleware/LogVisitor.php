<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class LogVisitor {
    public function handle(Request $request, Closure $next) {
        $ipAddress = $request->ip();
        $visitDate = date('Y-m-d');

        if (!Visitor::where('ip_address', $ipAddress)->where('visit_date', $visitDate)->exists()) {
            Visitor::create([
                'ip_address' => $ipAddress,
                'visit_date' => $visitDate,
            ]);
        }

        return $next($request);
    }
}
