<?php

namespace App\Http\Controllers\Web\Auth\ForgotPassword;

use App\Http\Controllers\Web\Auth\AuthController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ForgotPasswordController extends AuthController
{
    /**
     * Forgot Password Page
     *
     * @return Application|Factory|View
     */
    public function forgotPasswordPage(): View|Factory|Application
    {
        return view('auth.forgot-password', [
            'title' => 'Forgot Password'
        ]);
    }
}
