<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApplicationController;

class DashboardAdminController extends Controller
{
    public function admin_index()
    {
        $counts = DB::table('users')
            ->selectRaw('count(*) as users')
            ->selectRaw("count(case when is_admin = 1 then 1 end) as admins")
            ->selectRaw("count(case when is_employee = 1 then 1 end) as employees")
            ->selectRaw("count(case when is_customer = 1 then 1 end) as customers")
            ->first();

        return Inertia::render('Application/Admin/Dashboard', [
            'counts' => $counts
        ]);
    }
    //
    public function admin_profile(Request $request)
    {
        return Inertia::render('Application/Admin/Profile', [
            'sessions' => ApplicationController::sessions($request)->all(),
        ]);
    }
}
