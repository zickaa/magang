<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionAuth
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // cek apakah session 'logged_in' ada
        if (!session('logged_in')) {
            return redirect()->route('login'); // kalau belum login, balikin ke halaman login
        }

        return $next($request); // lanjut kalau sudah login
    }
}
