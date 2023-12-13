<?php

namespace App\Http\Controllers\Web\User\Member\Expenditure;

use App\Http\Controllers\Web\User\Member\MemberController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ExpenditureController extends MemberController
{
    /**
     * Expenditure Page
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('user.member.expenditure.index', [
            'title' => 'Expenditure',
        ]);
    }
}
