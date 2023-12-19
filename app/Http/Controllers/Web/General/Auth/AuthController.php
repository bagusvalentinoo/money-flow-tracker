<?php

namespace App\Http\Controllers\Web\General\Auth;

use App\Http\Controllers\Web\General\GeneralController;
use App\Services\Auth\AuthService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class AuthController extends GeneralController
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Redirect to the correct auth url based on the user role
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function redirectAuth(): Redirector|RedirectResponse|Application
    {
        return redirect($this->authService->getAuthUrlRedirectByUserRole(request()->user()));
    }

    /**
     * Logout the user
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        $this->authService->logout();
        return to_route('web.auth.sign_in.sign_in_page');
    }
}
