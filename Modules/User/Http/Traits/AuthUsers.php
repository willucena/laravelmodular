<?php

namespace Modules\User\Http\Traits;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

trait AuthUsers
{
    use AuthenticatesUsers;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('user::auth.login');
    }

}
