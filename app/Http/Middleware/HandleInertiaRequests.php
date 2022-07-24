<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'flash' => function () use ($request) {
                return [
                    'success' => $request->session()->get('success'),
                    'error' => $request->session()->get('error'),
                ];
            },
            // version
            'version' => function () {
                return [
                    'versionnr' => config('newspilot.version.versionnr'),
                    'versionsdatum' => config('newspilot.version.versionsdatum'),
                ];
            },
            // navtype
            'navtype' => function () {
                return [
                    'nav_header' => 'header',
                    'nav_sidebar' => 'sidebar',
                ];
            },
            // applications
            'applications' => function () {
                return [
                    'app_admin' => 'admin',
                    'app_employee' => 'employee',
                    'app_customer' => 'customer',
                    'app_admin_name' => 'Administrator-Dashboard',
                    'app_employee_name' => 'Mitarbeiter-Dashboard',
                    'app_customer_name' => 'Kunden-Dashboard',
                ];
            },
        ]);
    }
}
