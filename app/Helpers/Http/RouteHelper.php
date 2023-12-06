<?php

namespace App\Helpers\Http;

class RouteHelper
{
    /**
     * Route prefixes
     *
     * @var array|array[]
     */
    public static array $routePrefixes = [
        'auth' => [
            'api_name' => 'auth',
            'web_name' => 'auth'
        ],
        'admin' => [
            'api_name' => 'admin',
            'web_name' => 'admin'
        ],
        'member' => [
            'api_name' => 'member',
            'web_name' => 'member'
        ]
    ];
}
