<?php

namespace App\Services\Auth\Impl;

use App\Exceptions\Http\FormattedResponseException;
use App\Models\User\User;
use App\Services\Auth\SignUpService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpServiceImpl implements SignUpService
{
    private User $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * Create new user member.
     *
     * @param Request $request
     * @return Builder|Model
     * @throws FormattedResponseException
     */
    public function createNewUserMember(Request $request): Model|Builder
    {
        $user = $this->userModel->query()->create(
            array_filter([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ], customArrayFilter())
        );
        $user->assignRole(['Member']);
        $user->member()->create(array_filter([], customArrayFilter()));

        return $user;
    }
}
