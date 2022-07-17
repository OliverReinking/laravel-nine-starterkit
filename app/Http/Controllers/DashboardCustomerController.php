<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardCustomerController extends Controller
{
    public function customer_index()
    {
        return Inertia::render('Application/Customer/Dashboard');
    }
    //
    public function customer_profile(Request $request)
    {
        return Inertia::render('Application/Customer/Profile', [
            'sessions' => ApplicationController::sessions($request)->all(),
        ]);
    }
}
