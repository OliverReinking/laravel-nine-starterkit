<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function admin_index()
    {
        //
        return Inertia::render('Application/Admin/Dashboard');
    }
}
