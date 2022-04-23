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
}
