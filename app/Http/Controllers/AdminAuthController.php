<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Comune;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm($cf_ente)
    {
        if (session('admin_logged_in_send') && session('admin_id_send')) {
            $admin = \App\Models\Admin::find(session('admin_id_send'));

            if ($admin && $admin->comune->fiscal_code === $cf_ente) {
                // già loggato, vai direttamente alla dashboard
                return redirect("/{$cf_ente}/");
            }

            // è loggato ma non appartiene a questo ente → logout forzato
            session()->flush();
        }

        $comune = \App\Models\Comune::all()->where("fiscal_code", "=", $cf_ente)->first();
        if (!$comune){
            abort(404);
        }

        return view('login', ["cf_ente"=>$cf_ente, "comune"=>$comune]);
    }

    public function showDashboard($cf_ente){
        $comune = \App\Models\Comune::all()->where("fiscal_code", "=", $cf_ente)->first();
        if (!$comune){
            abort(404);
        }

        return view('home', ["cf_ente"=>$cf_ente, "comune"=>$comune]);
    }

    public function login(Request $request, $cf_ente)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $comune = Comune::where('fiscal_code', $cf_ente)->first();

        if (!$comune) {
            abort(404);
        }

        $admin = Admin::where('email', $request->email)
            ->where('comune_id', $comune->id)
            ->first();


        if ($admin && Hash::check($request->password, $admin->password)) {
            session()->put('admin_logged_in_send', true);
            session()->put('admin_id_send', $admin->id);
            return redirect("/{$cf_ente}/");
        }

        return back()->withErrors(['email' => 'Credenziali non valide.']);
    }

    public function logout($cf_ente)
    {
        session()->forget(['admin_logged_in_send', 'admin_id_send']);
        return redirect("/{$cf_ente}");
    }
}
