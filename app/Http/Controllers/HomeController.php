<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendMailJobApplication;
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
        $imprintFile = Jetstream::localizedMarkdownPath('imprint.md');
        $imprint = Str::markdown(file_get_contents($imprintFile));
        //
        return Inertia::render('Application/Homepage/Imprint', [
            'imprint' => $imprint,
        ]);
    }
    public function home_privacy()
    {
        $policyFile = Jetstream::localizedMarkdownPath('policy.md');
        $policy = Str::markdown(file_get_contents($policyFile));
        //
        return Inertia::render('Application/Homepage/Privacy', [
            'policy' => $policy,
        ]);
    }
    public function home_job_application()
    {
        return Inertia::render('Application/Homepage/JobApplication');
    }
    public function home_job_application_send(RequestJobApplication $request)
    {
        // Ermittle die contactvalues
        $job_application_values = collect();
        //
        $job_application_values->first_name = $request->first_name;
        $job_application_values->last_name = $request->last_name;
        $job_application_values->email = $request->email;
        $job_application_values->phone = $request->phone;
        //
        $job_application_values->gender = "weiblich";
        if ($request->gender = "male") {
            $job_application_values->gender = "männlich";
        }
        //
        $job_application_values->continent = trans($request->continent);
        //
        foreach ($request->languages as $key => $value) {
            $job_application_values->$key = "nein";
            if ($value == true) {
                $job_application_values->$key = "ja";
            }
        }
        //
        $job_application_values->curriculum_vitae = $request->curriculum_vitae;
        //
        dispatch(new SendMailJobApplication($job_application_values));
        //
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
    public function user_is_no_employee()
    {
        return Inertia::render('Application/Homepage/UserIsNoEmployee');
    }
    public function user_is_no_customer()
    {
        return Inertia::render('Application/Homepage/UserIsNoCustomer');
    }
    public function no_application_found()
    {
        return Inertia::render('Application/Homepage/NoApplicationFound');
    }
}
