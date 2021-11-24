<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\UserAccessManager;

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

Route::middleware('auth:sanctum')->get('/user/{dashboard}', UserAccessManager::class)->name('user');
Route::middleware('auth:sanctum')->post('/user/onboarding', [UserAccessManager::class, 'onboard']);