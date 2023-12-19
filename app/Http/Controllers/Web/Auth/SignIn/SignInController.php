<?php

namespace App\Http\Controllers\Web\Auth\SignIn;

use App\Http\Controllers\Web\Auth\AuthController;
use App\Http\Requests\Auth\SignInRequest;
use App\Services\Auth\SignInService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Throwable;

class SignInController extends AuthController
{
    private SignInService $signInService;

    public function __construct(SignInService $signInService)
    {
        $this->signInService = $signInService;
    }

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

    /**
     * Sign In
     *
     * @param SignInRequest $request
     * @return RedirectResponse
     */
    public function signIn(SignInRequest $request): RedirectResponse
    {
        try {
            $user = $this->signInService->checkUserSignInCredentials($request);
            $this->signInService->signIn($request, $user);
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return to_route('web.general.auth.redirect');
    }
}
