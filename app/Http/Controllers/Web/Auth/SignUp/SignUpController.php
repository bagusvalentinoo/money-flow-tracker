<?php

namespace App\Http\Controllers\Web\Auth\SignUp;

use App\Http\Controllers\Web\Auth\AuthController;
use App\Http\Requests\Auth\SignUpRequest;
use App\Services\Auth\SignInService;
use App\Services\Auth\SignUpService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Throwable;

class SignUpController extends AuthController
{
    private SignUpService $signUpService;
    private SignInService $signInService;

    public function __construct(SignUpService $signUpService, SignInService $signInService)
    {
        $this->signUpService = $signUpService;
        $this->signInService = $signInService;
    }

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

    /**
     * Sign Up
     *
     * @param SignUpRequest $request
     * @return RedirectResponse
     */
    public function signUp(SignUpRequest $request): RedirectResponse
    {
        try {
            $user = $this->signUpService->createNewUserMember($request);
            $this->signInService->signIn($request, $user);
        } catch (Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        
        return to_route('web.general.auth.redirect');
    }
}
