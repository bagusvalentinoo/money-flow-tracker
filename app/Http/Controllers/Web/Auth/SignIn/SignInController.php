<?php

namespace App\Http\Controllers\Web\Auth\SignIn;

use App\Http\Controllers\Web\Auth\AuthController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SignInController extends AuthController
{
    /**
     * Sign In Page
     *
     * @return Application|Factory|View
     */
    public function signInPage(): View|Factory|Application
    {
        return view('auth.sign-in', [
            'title' => 'Sign In'
        ]);
    }
}
