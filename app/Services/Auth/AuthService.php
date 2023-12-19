<?php

namespace App\Services\Auth;

use App\Models\User\User;

interface AuthService
{
    /**
     * Get Auth Url Redirect By User Role
     *
     * @param User $user
     * @return string
     */
    public function getAuthUrlRedirectByUserRole(User $user): string;

    /**
     * Logout
     *
     * @return void|null
     */
    public function logout();
}
