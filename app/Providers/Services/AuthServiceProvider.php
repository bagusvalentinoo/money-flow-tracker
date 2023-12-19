<?php

namespace App\Providers\Services;

use App\Services\Auth\AuthService;
use App\Services\Auth\Impl\AuthServiceImpl;
use App\Services\Auth\Impl\SignInServiceImpl;
use App\Services\Auth\Impl\SignUpServiceImpl;
use App\Services\Auth\SignInService;
use App\Services\Auth\SignUpService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Services that should be registered as singletons.
     *
     * @var array|string[]
     */
    public array $singletons = [
        SignInService::class => SignInServiceImpl::class,
        SignUpService::class => SignUpServiceImpl::class,
        AuthService::class => AuthServiceImpl::class,
    ];

    /**
     * Provides services.
     *
     * @return string[]
     */
    public function provides(): array
    {
        return [
            SignInService::class,
            SignUpService::class,
            AuthService::class,
        ];
    }
}
