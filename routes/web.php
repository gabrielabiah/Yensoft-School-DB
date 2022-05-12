<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\UserAccessManager;
use Illuminate\Support\Str;
use Dompdf\Dompdf;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'auth.login');

Route::middleware(['auth:sanctum', 'accesslevel'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {
    //Student Management Module
    Route::get('/student-admission', function () {
        return view('student-management.admit');
    })->name('admit-student');
    Route::get('/student-management', function () {
        return view('student-management.list');
    })->name('list-students');
    Route::get('/student-promotion', function () {
        return view('student-management.promote');
    })->name('promote-students');
    Route::get('/classes', function () {
        return view('student-management.classes');
    })->name('classes');
    Route::get('/subjects', function () {
        return view('student-management.subjects');
    })->name('subjects');
    //Exam Management Module
    Route::get('/master-list', function () {
        return view('exam-management.masterlist');
    })->name('master-list');
    Route::get('/report-card', function () {
        return view('exam-management.reportcard');
    })->name('report-card');
    Route::get('/marks-entry', function () {
        return view('exam-management.marksentry');
    })->name('marks-entry');
    Route::get('/grades', function () {
        return view('exam-management.grades');
    })->name('grades');
    Route::get('/exam-list', function () {
        return view('exam-management.examlist');
    })->name('exam-list');
    //Settings Module
    Route::get('/upgrade', function () {
        return view('settings.upgrade');
    })->name('upgrade');
    Route::get('/users', function () {
        return view('settings.usermanagement');
    })->name('user-management');
    Route::get('/announcement', function () {
        return view('settings.announcement');
    })->name('announcement');
    Route::get('/user-profile', function () {
        return view('settings.userprofile');
    })->name('user-profile');
    Route::get('/student-profile', function () {
        return view('settings.studentprofile');
    })->name('student-profile');
    Route::get('/settings', function () {
        return view('settings.settings');
    })->name('settings');
    //Accounts Management Module
    Route::get('/payments', function () {
        return view('accounts-management.payments');
    })->name('payments');
    Route::get('/billing', function () {
        return view('accounts-management.billing');
    })->name('billing');
    Route::get('/record-payment', function () {
        return view('accounts-management.recordpayment');
    })->name('record-payment');

    //Payments
    Route::post('/pay/{amount}', [PaymentController::class, 'redirectToGateway'])->name('pay');
    // Route::get('/pay/{amount}', function(){
    //     return 'paying ' .$amount; 
    // })->name('pay');
    Route::post('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('payment');
});

Route::get('/pdf', function () {
    return view('test');
});


Route::middleware('auth:sanctum')->get('/user/{dashboard}', UserAccessManager::class)->name('user');
Route::middleware('auth:sanctum')->post('/user/onboarding', [UserAccessManager::class, 'onboard']);
