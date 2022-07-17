<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardEmployeeController extends Controller
{
    public function employee_index()
    {
        return Inertia::render('Application/Employee/Dashboard');
    }
    //
    public function employee_profile(Request $request)
    {
        return Inertia::render('Application/Employee/Profile', [
            'sessions' => ApplicationController::sessions($request)->all(),
        ]);
    }
}
