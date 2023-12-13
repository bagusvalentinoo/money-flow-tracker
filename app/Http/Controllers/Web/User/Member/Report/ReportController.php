<?php

namespace App\Http\Controllers\Web\User\Member\Report;

use App\Http\Controllers\Web\User\Member\MemberController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ReportController extends MemberController
{
    /**
     * Report Page
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('user.member.report.index', [
            'title' => 'Report'
        ]);
    }
}
