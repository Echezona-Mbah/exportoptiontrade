<?php

use App\Http\Controllers\Admin\AllDepositController;
use App\Http\Controllers\Admin\AllInvestController;
use App\Http\Controllers\Admin\AllWithdrawController;
use App\Http\Controllers\Admin\DashboradController;
// use App\Http\Controllers\Admin\DayCounterController;
use App\Http\Controllers\Admin\editController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\User\DayCounterController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ReferalsController;
use App\Http\Controllers\User\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {

    Route::get('deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::get('invest/{id}', [DepositController::class, 'invest'])->name('invest');
    Route::post('submit-invest', [DepositController::class, 'submitInvest'])->name('submitInvest');
    Route::get('plan', [DepositController::class, 'plan'])->name('plan');
    Route::get('depositTable', [DepositController::class, 'depositTable'])->name('depositTable');
    Route::get('withdraw', [WithdrawController::class, 'withdraw'])->name('withdraw');
    Route::post('submitWithdraw', [WithdrawController::class, 'submitWithdraw'])->name('submitWithdraw');
    Route::get('withdrawalTable', [WithdrawController::class, 'withdrawalTable'])->name('withdrawalTable');
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('updateProfile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::get('referals', [ReferalsController::class, 'referals'])->name('referals');
    Route::get('referalslink', [ReferalsController::class, 'referalslink'])->name('referalslink');
    Route::post('logout', [ReferalsController::class, 'logout'])->name('logout');

    Route::get('/counter',[DayCounterController::class, 'counter']);


    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

// Route::get('/counter',[DayCounterController::class, 'counter']);

Route::get('admin/register', [RegisterController::class, 'register'])->name('admin/register');
Route::post('admin/register', [RegisterController::class, 'adminregister'])->name('admin/register');
Route::get('admin/login', [RegisterController::class, 'showLoginForm'])->name('admin/login');
Route::post('admin/login', [RegisterController::class, 'login'])->name('admin/login');
Route::get('admin/dashboard', [DashboradController::class, 'admin'])->name('admin/dashboard');
Route::get('admin/allUser', [DashboradController::class, 'allUser'])->name('admin/allUser');

Route::get('admin/allUser', [DashboradController::class, 'allUser'])->name('admin.allUser');
Route::get('admin/editUser/{user}', [DashboradController::class, 'edit'])->name('admin.editUser');
Route::put('admin/updateUser/{user}', [DashboradController::class, 'update'])->name('admin.updateUser');
Route::delete('admin/deleteUser/{user}', [DashboradController::class, 'destroy'])->name('admin.deleteUser');

Route::get('admin/allDeposit', [AllDepositController::class, 'allDeposit'])->name('admin.allDeposit');
Route::get('admin/editDeposit/{deposit}', [AllDepositController::class, 'edit'])->name('admin.editDeposit');
Route::put('admin/updateDeposit/{deposit}', [AllDepositController::class, 'update'])->name('admin.updateDeposit');
Route::delete('admin/deleteDeposit/{deposit}', [AllDepositController::class, 'destroy'])->name('admin.deleteDeposit');
Route::post('deposits/{id}/confirm', [AllDepositController::class, 'confirm'])->name('deposits.confirm');

Route::get('admin/allWithdraw', [AllWithdrawController::class, 'allWithdraw'])->name('admin.allWithdraw');
Route::post('allWithdraw/{id}/confirm', [AllWithdrawController::class, 'confirm'])->name('allWithdraw.confirm');
Route::delete('admin/deleteWithdrawal/{withdrawal}', [AllWithdrawController::class, 'destroy'])->name('admin.deleteWithdrawal');

Route::get('admin/invests', [AllInvestController::class, 'allInvest'])->name('admin.invests');
Route::get('admin/editWallet', [editController::class, 'editWallet'])->name('admin.editWallet');
Route::put('admin/updateWallet', [editController::class, 'updateWallet'])->name('admin.updateWallet');
Route::get('/logout',[editController::class, 'logout'])->name('logout');
