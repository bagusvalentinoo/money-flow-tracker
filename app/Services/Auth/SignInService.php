<?php

namespace App\Services\Auth;

use App\Exceptions\Http\FormattedResponseException;
use App\Models\User\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface SignInService
{
    /**
     * Check User Sign In Credentials
     *
     * @param Request $request
     * @return Model|Builder
     * @throws FormattedResponseException
     */
    public function checkUserSignInCredentials(Request $request): Model|Builder;

    /**
     * Sign In
     *
     * @param Request $request
     * @param User $user
     * @return bool|Authenticatable
     */
    public function signIn(Request $request, User $user): bool|Authenticatable;
}
