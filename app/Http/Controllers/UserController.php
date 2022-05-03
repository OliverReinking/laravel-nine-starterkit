<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestAdminUpdateUser;
use Laravel\Jetstream\Contracts\DeletesUsers;

class UserController extends Controller
{
    // =================
    // APPLICATION ADMIN
    // =================
    public function admin_user_index()
    {
        $users = User::select(
            'users.id as id',
            'users.name as name',
            'users.email as email',
            'users.is_admin as is_admin',
            'users.is_employee as is_employee',
            'users.is_customer as is_customer',
            'users.last_login_at as last_login_at'
        )
            ->orderBy('users.name')
            ->filterUser(Request::only('search'))
            ->paginate(10);
        //
        return Inertia::render('Application/Admin/UserList', [
            'filters' => Request::all('search'),
            'users' => $users,
        ]);
    }
    //
    public function admin_user_show(User $appuser)
    {
        Log::info('UserController admin_user_show', [
            'appuser' => $appuser->id
        ]);

        return Inertia::render('Application/Admin/UserShow', [
            'appuser' => $appuser,
        ]);
    }
    //
    public function admin_user_edit(User $appuser)
    {
        return Inertia::render('Application/Admin/UserForm', [
            'appuser' => $appuser,
        ]);
    }
    //
    public function admin_user_update(User $appuser, RequestAdminUpdateUser $request)
    {
        $appuser->name = $request->name;
        $appuser->email = $request->email;
        $appuser->is_admin = $request->is_admin;
        $appuser->is_employee = $request->is_employee;
        $appuser->is_customer = $request->is_customer;
        $appuser->save();
        //
        return Redirect::route('admin.user.edit', $appuser->id)
            ->with(['success' => 'Die Daten des Anwenders wurden erfolgreich gespeichert.']);
    }
    //
    public function admin_user_delete(User $appuser)
    {
        app(DeletesUsers::class)->delete($appuser->fresh());
        //
        return Redirect::route('admin.user.index')
            ->with(['success' => 'Die Daten des Anwenders wurden erfolgreich gelöscht.']);
    }
}
