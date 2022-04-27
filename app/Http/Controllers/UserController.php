<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

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
        return Inertia::render('Application/Admin/UserEdit', [
            'appuser' => $appuser,
        ]);
    }
}
