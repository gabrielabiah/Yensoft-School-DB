<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\UserAccessManager;
use Illuminate\Support\Str;
use NahidulHasan\Html2pdf\Facades\Pdf;


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


Route::get('/test', function(){
    $obj = new Pdf();

$html = '<html><body>'
    . '<p>Put your html here, or generate it with your favourite '
    . 'templating system.</p>'
    . '</body></html>';

$invoice = $obj->generatePdf($html);

define('INVOICE_DIR', public_path('uploads/invoices'));

if (!is_dir(INVOICE_DIR)) {
    mkdir(INVOICE_DIR, 0755, true);
}

$outputName = str_random(10);
$pdfPath = INVOICE_DIR.'/'.$outputName.'.pdf';


File::put($pdfPath, $invoice);

$headers = [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' =>  'attachment; filename="'.'filename.pdf'.'"',
];

return response()->download($pdfPath, 'filename.pdf', $headers);

}); 

Route::middleware('auth:sanctum')->get('/user/{dashboard}', UserAccessManager::class)->name('user');
Route::middleware('auth:sanctum')->post('/user/onboarding', [UserAccessManager::class, 'onboard']);