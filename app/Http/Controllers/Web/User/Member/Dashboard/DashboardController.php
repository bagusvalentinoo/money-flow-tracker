<?php

namespace App\Http\Controllers\Web\User\Member\Dashboard;

use App\Http\Controllers\Web\User\Member\MemberController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController extends MemberController
{
    /**
     * Dashboard Page
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('user.member.dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }
}
