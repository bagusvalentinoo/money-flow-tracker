<?php

namespace App\Http\Controllers\Web\User\Member\Revenue;

use App\Http\Controllers\Web\User\Member\MemberController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class RevenueController extends MemberController
{
    /**
     * Revenue Page
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('user.member.revenue.index', [
            'title' => 'Revenue'
        ]);
    }
}
