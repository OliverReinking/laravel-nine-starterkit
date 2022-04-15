<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestJobApplication;

class HomeController extends Controller
{
    public function home_index()
    {
        return Inertia::render('Application/Homepage/Home');
    }
    public function home_about()
    {
        return Inertia::render('Application/Homepage/About');
    }
    public function home_mission()
    {
        return Inertia::render('Application/Homepage/Mission');
    }
    public function home_contact()
    {
        return Inertia::render('Application/Homepage/Contact');
    }
    public function home_imprint()
    {
        return Inertia::render('Application/Homepage/Imprint');
    }
    public function home_privacy()
    {
        return Inertia::render('Application/Homepage/Privacy');
    }
    public function home_job_application()
    {
        return Inertia::render('Application/Homepage/JobApplication');
    }
    public function home_job_application_send(RequestJobApplication $request)
    {
        return Redirect::route('job_application')
            ->with([
                'success' => 'Die Bewerbungsdaten wurden erfolgreich übermittelt.
                          Wir werden uns schnellstmöglich mit Dir in Verbindung setzen.'
            ]);
    }
    public function user_is_no_admin()
    {
        return Inertia::render('Application/Homepage/UserIsNoAdmin');
    }
    public function no_application_found()
    {
        return Inertia::render('Application/Homepage/NoApplicationFound');
    }
}
