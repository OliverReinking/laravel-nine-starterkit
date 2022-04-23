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
}
