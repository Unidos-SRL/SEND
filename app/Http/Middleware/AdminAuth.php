<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;

class AdminAuth
{
    public function handle($request, Closure $next)
    {

        if (!session('admin_logged_in_send') || !session('admin_id_send')) {
            return redirect("/" . $request->route('cf_ente') . "/login");
        }

        $admin = Admin::find(session('admin_id_send'));

        if (!$admin || $admin->comune->fiscal_code !== $request->route('cf_ente')) {
            session()->flush();
            return redirect("/" . $request->route('cf_ente') . "/login");
        }
        return $next($request);
    }
}

