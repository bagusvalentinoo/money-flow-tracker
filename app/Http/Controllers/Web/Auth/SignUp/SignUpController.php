<?php

namespace App\Http\Controllers\Web\Auth\SignUp;

use App\Http\Controllers\Web\Auth\AuthController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SignUpController extends AuthController
{
    /**
     * Sign Up Page
     * 
     * @return Application|Factory|View
     */
    public function signUpPage(): View|Factory|Application
    {
        return view('auth.sign-up', [
            'title' => 'Sign Up'
        ]);
    }
}
