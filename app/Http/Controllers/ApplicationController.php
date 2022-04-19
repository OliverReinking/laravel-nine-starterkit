<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        // speichere users.last_login_at
        $user->last_login_at = Carbon::now();
        $user->save();
        //
        if ($user->is_admin) {
            return redirect()->intended(route('admin.dashboard'));
        }
        // Anwender abmelden
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Keine Anwendung für Anwender vorhanden
        return redirect()->intended(route('no_application_found'));
    }
}
