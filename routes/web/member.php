<?php

use App\Http\Controllers\Web\User\Member\Dashboard\DashboardController;
use App\Http\Controllers\Web\User\Member\Expenditure\ExpenditureController;
use App\Http\Controllers\Web\User\Member\Report\ReportController;
use App\Http\Controllers\Web\User\Member\Revenue\RevenueController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Member Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('web.user.member.dashboard.index');
});

Route::group(['prefix' => 'revenue'], function () {
    Route::get('/', [RevenueController::class, 'index'])->name('web.user.member.revenue.index');
});

Route::group(['prefix' => 'expenditure'], function () {
    Route::get('/', [ExpenditureController::class, 'index'])->name('web.user.member.expenditure.index');
});

Route::group(['prefix' => 'report'], function () {
    Route::get('/', [ReportController::class, 'index'])->name('web.user.member.report.index');
});
