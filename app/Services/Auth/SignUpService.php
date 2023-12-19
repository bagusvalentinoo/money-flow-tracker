<?php

namespace App\Services\Auth;

use App\Exceptions\Http\FormattedResponseException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface SignUpService
{
    /**
     * Create new user member.
     *
     * @param Request $request
     * @return Builder|Model
     * @throws FormattedResponseException
     */
    public function createNewUserMember(Request $request): Model|Builder;
}
