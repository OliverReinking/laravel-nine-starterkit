<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\ApplicationController;

class DashboardAdminController extends Controller
{
    public function admin_index()
    {
        return Inertia::render('Application/Admin/Dashboard');
    }
    //
    public function admin_profile(Request $request)
    {
        return Inertia::render('Application/Admin/Profile', [
            'sessions' => ApplicationController::sessions($request)->all(),
        ]);
    }
}
