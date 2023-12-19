<?php

namespace App\Services\Auth\Impl;

use App\Exceptions\Http\FormattedResponseException;
use App\Models\User\User;
use App\Services\Auth\SignInService;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignInServiceImpl implements SignInService
{
    private User $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * Check User Sign In Credentials
     *
     * @param Request $request
     * @return Model|Builder
     * @throws FormattedResponseException
     */
    public function checkUserSignInCredentials(Request $request): Model|Builder
    {
        $user = $this->userModel->query()->where('email', $request->input('email'))->first();

        if (!$user)
            throw new FormattedResponseException(trans('auth.sign_in_invalid'));

        if (!Hash::check($request->input('password'), $user->password))
            throw new FormattedResponseException(trans('auth.sign_in_invalid'));

        return $user;
    }

    /**
     * Sign In
     *
     * @param Request $request
     * @param User $user
     * @return bool|Authenticatable
     */
    public function signIn(Request $request, User $user): bool|Authenticatable
    {
        return Auth::loginUsingId($user->id, boolval($request->input('remember_me')));
    }
}
