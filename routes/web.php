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

Route::middleware(['auth:sanctum'])->group(function(){

    Route::get('/student-admission', function(){ return view('student-management.admit'); })->name('admit-student'); 
    Route::get('/student-management', function(){ return view('student-management.list'); })->name('list-students'); 
    Route::get('/student-promotion', function(){ return view('student-management.promote'); }); 
    Route::get('/classes', function(){ return view('student-management.classes'); })->name('classes'); 
    Route::get('/subjects', function(){ return view('student-management-subjects'); })->name('subjects'); 
    Route::get('/master-list', function(){ return view('exam-management-masterlist'); })->name('master-list'); 
    Route::get('/report-card', function(){ return view('exam-management-reportcard'); })->name('report-card'); 
    Route::get('/marks-entry', function(){ return view('exam-management-marksentry'); })->name('marks-entry'); 
    Route::get('/grades', function(){ return view('exam-management-grades'); })->name('grades'); 
    Route::get('/exam-list', function(){ return view('exam-management-examlist'); })->name('exam-list'); 

});

Route::get('/pdf', function(){
    return view('test');
});

Route::get('/test', function(){
    $dompdf = new Dompdf();
$dompdf->loadHtml(view('test'));
$dompdf->set_protocol("https://127.0.0.1:8000");
$dompdf->set_base_path('/');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('test.pdf',['Attachment'=>false]);
}); 

Route::middleware('auth:sanctum')->get('/user/{dashboard}', UserAccessManager::class)->name('user');
Route::middleware('auth:sanctum')->post('/user/onboarding', [UserAccessManager::class, 'onboard']);