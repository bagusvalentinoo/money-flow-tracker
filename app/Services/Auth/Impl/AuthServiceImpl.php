<?php

namespace App\Services\Auth\Impl;

use App\Helpers\Model\User\UserRoleHelper;
use App\Models\User\User;
use App\Services\Auth\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthServiceImpl implements AuthService
{
    /**
     * Get Auth Url Redirect By User Role
     *
     * @param User $user
     * @return string
     */
    public function getAuthUrlRedirectByUserRole(User $user): string
    {
        $redirectUrl = '';

        $firstRole = $user->roles()->first();

        if (!$firstRole) return $redirectUrl;

        switch ($firstRole->name) {
            case UserRoleHelper::$userRoles['admin']['name']:
                $redirectUrl = UserRoleHelper::$userRolesHomePrefix['admin']['name'];
                break;
            case UserRoleHelper::$userRoles['member']['name']:
                $redirectUrl = UserRoleHelper::$userRolesHomePrefix['member']['name'];
                break;
        }

        return $redirectUrl;
    }

    /**
     * Logout
     *
     * @return void|null
     */
    public function logout()
    {
        return Auth::logout();
    }
}
