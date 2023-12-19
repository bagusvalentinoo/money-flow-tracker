<?php

namespace App\Helpers\Model\User;

class UserRoleHelper
{
    /**
     * User roles
     *
     * @var array|array[]
     */
    public static array $userRoles = [
        'admin' => [
            'name' => 'Admin'
        ],
        'member' => [
            'name' => 'Member'
        ]
    ];

    /**
     * User Roles Home Prefix
     *
     * @var array|array[]
     */
    public static array $userRolesHomePrefix = [
        'admin' => [
            'name' => '/admin/dashboard'
        ],
        'member' => [
            'name' => '/dashboard'
        ]
    ];
}
